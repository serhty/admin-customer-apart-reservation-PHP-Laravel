<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apart\ApartSupportsModel;
use App\Models\Apart\ApartModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApartSupportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard('apart')->user()->id;

        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        $supports = ApartSupportsModel::where([["status","!=","0"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        return view('apart.supports.supports',compact('supports'));
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
        $user_id = Auth::guard('apart')->user()->id;
        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        $support = ApartSupportsModel::findOrFail($id);

        if($support->apart_id == $apart_id){
            return view('apart.supports.support-update',compact('support'));
        }else{
            return view('not-authorized');
        }

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

        $support = ApartSupportsModel::findOrFail($id);
        
        if(isset($request->save)){
            $support->description = $request->description;

            $update = $support->save();

            return redirect()->route('apart.supports.edit',[
                'update' => $update,
                $support->id => $support->id
            ]);

        }elseif(isset($request->delete)){
            $support->status = "0";

            $delete = $support->save();

            return redirect()->route('apart.supports.index',[
                'delete' => $delete,
            ]);

        }elseif(isset($request->reply)){
            $support->status = "2";
            $support->description = $request->description;

            $update = $support->save();

            return redirect()->route('apart.supports.edit',[
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
