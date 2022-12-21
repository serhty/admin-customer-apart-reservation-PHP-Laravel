<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CustomersModel;
use App\Models\Admin\ApartModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = CustomersModel::where("status","!=","0")->orderBy('id','ASC')->get();

        $aparts = DB::table('apart_infos')->select('*')->where("status","=","1")->get();

        return view('admin.customers.customers',compact([['customers'],['aparts']]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.customer-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new CustomersModel;
        $customer->status = "1";
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->phone = $request->phone;
        $customer->mail = $request->mail;
        $customer->username = $request->username;
        $customer->password = Hash::make($request->password);
        $customer->started_date = date("Y-m-d", strtotime($request->started_date));
        $customer->ended_date = date("Y-m-d", strtotime($request->ended_date));
        $customer->apart_name = $request->apart_name;
        $customer->description = $request->description;

        $add = $customer->save();

        $apart = new ApartModel;
        $apart->status = "1";
        $apart->customer_id = $customer->id;
        $apart->apart_name = $customer->apart_name;
        $apart->apart_link = Str::slug($customer->apart_name);
        $apart->apart_price ="0.00";

        $add = $apart->save();

        return redirect()->route('admin.customers.edit',[
            'add' => $add,
            $customer->id => $customer->id
        ]);
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
        $customer = CustomersModel::findOrFail($id);
        return view('admin.customers.customer-update',compact('customer'));
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
            $customer = CustomersModel::findOrFail($id);
            $customer->name = $request->name;
            $customer->surname = $request->surname;
            $customer->phone = $request->phone;
            $customer->mail = $request->mail;
            $customer->username = $request->username;
            $customer->started_date = date("Y-m-d", strtotime($request->started_date));
            $customer->ended_date = date("Y-m-d", strtotime($request->ended_date));
            $customer->apart_name = $request->apart_name;
            $customer->description = $request->description;

            $update = $customer->save();

            return redirect()->route('admin.customers.edit',[
                'update' => $update,
                $customer->id => $customer->id
            ]);

        }elseif(isset($request->expired)){
            $customer = CustomersModel::findOrFail($id);
            $customer->status = "2";
            $customer->name = $request->name;
            $customer->surname = $request->surname;
            $customer->phone = $request->phone;
            $customer->mail = $request->mail;
            $customer->started_date = date("Y-m-d", strtotime($request->started_date));
            $customer->ended_date = date("Y-m-d", strtotime($request->ended_date));
            $customer->apart_name = $request->apart_name;
            $customer->description = $request->description;

            $update = $customer->save();

            return redirect()->route('admin.customers.edit',[
                'update' => $update,
                $customer->id => $customer->id
            ]);

        }elseif(isset($request->delete)){
            $customer = CustomersModel::findOrFail($id);
            $customer->status = "0";
            $customer->name = $request->name;
            $customer->surname = $request->surname;
            $customer->phone = $request->phone;
            $customer->mail = $request->mail;
            $customer->started_date = date("Y-m-d", strtotime($request->started_date));
            $customer->ended_date = date("Y-m-d", strtotime($request->ended_date));
            $customer->apart_name = $request->apart_name;
            $customer->description = $request->description;

            $delete = $customer->save();

            return redirect()->route('admin.customers.index',[
                'delete' => $delete,
            ]);


        }elseif(isset($request->active)){
            $customer = CustomersModel::findOrFail($id);
            $customer->status = "1";
            $customer->name = $request->name;
            $customer->surname = $request->surname;
            $customer->phone = $request->phone;
            $customer->mail = $request->mail;
            $customer->started_date = date("Y-m-d", strtotime($request->started_date));
            $customer->ended_date = date("Y-m-d", strtotime($request->ended_date));
            $customer->apart_name = $request->apart_name;
            $customer->description = $request->description;

            $update = $customer->save();

            return redirect()->route('admin.customers.edit',[
                'update' => $update,
                $customer->id => $customer->id
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
