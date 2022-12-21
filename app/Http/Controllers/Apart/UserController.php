<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CustomersModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($id == $user_id){
            $user = CustomersModel::findOrFail($id);
            return view('apart.user',compact('user'));
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

        $user_id = Auth::guard('apart')->user()->id;

        if($id == $user_id){
            $user = CustomersModel::findOrFail($id);
            $user->password = Hash::make($request->password);

            $update = $user->save();

            return redirect()->route('apart.home',[
                'update' => $update
            ]);
        }else{
            return view('not-authorized');
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
