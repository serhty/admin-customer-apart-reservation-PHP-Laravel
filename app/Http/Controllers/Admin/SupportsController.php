<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SupportsModel;

class SupportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supports = SupportsModel::where("status","!=","0")->orderBy('id','ASC')->get();
        return view('admin.supports.supports',compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $support = SupportsModel::findOrFail($id);
        return view('admin.supports.support-update',compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(isset($request->save)){
            $support = SupportsModel::findOrFail($id);
            $support->description = $request->description;

            $update = $support->save();

            return redirect()->route('admin.supports.edit',[
                'update' => $update,
                $support->id => $support->id
            ]);

        }elseif(isset($request->delete)){
            $support = SupportsModel::findOrFail($id);
            $support->status = "0";

            $delete = $support->save();

            return redirect()->route('admin.supports.index',[
                'delete' => $delete,
            ]);

        }elseif(isset($request->reply)){
            $support = SupportsModel::findOrFail($id);
            $support->status = "2";
            $support->description = $request->description;
            $support->reply = $request->reply;
            $support->reply_date = date('Y-m-d H:i:s');

            $update = $support->save();

            return redirect()->route('admin.supports.edit',[
                'update' => $update,
                $support->id => $support->id
            ]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
