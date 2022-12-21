<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SalesModel;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = SalesModel::where("status","!=","0")->orderBy('id','ASC')->get();
        return view('admin.sales.sales',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.sale-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new SalesModel;
        $sale->status = "1";
        $sale->customer_name = $request->customer_name;
        $sale->customer_surname = $request->customer_surname;
        $sale->customer_phone = $request->customer_phone;
        $sale->customer_mail = $request->customer_mail;
        $sale->customer_address = $request->customer_address;
        $sale->customer_apart = $request->customer_apart;
        $sale->sale_date = date("Y-m-d", strtotime($request->sale_date));
        $sale->price = str_replace(",",".",$request->price);
        $sale->discount = $request->discount;
        $sale->payable = str_replace(",",".",$request->payable);
        $sale->paid = str_replace(",",".",$request->paid);
        $sale->remaining = str_replace(",",".",$request->remaining);
        $sale->description = $request->description;
        
        $add = $sale->save();

        return redirect()->route('admin.sales.edit',[
            'add' => $add,
            $sale->id => $sale->id
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
        $sale = SalesModel::findOrFail($id);
        return view('admin.sales.sale-update',compact('sale'));
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
            $sale = SalesModel::findOrFail($id);
            $sale->customer_name = $request->customer_name;
            $sale->customer_surname = $request->customer_surname;
            $sale->customer_phone = $request->customer_phone;
            $sale->customer_mail = $request->customer_mail;
            $sale->customer_address = $request->customer_address;
            $sale->customer_apart = $request->customer_apart;
            $sale->sale_date = date("Y-m-d", strtotime($request->sale_date));
            $sale->price = str_replace(",",".",$request->price);
            $sale->discount = $request->discount;
            $sale->payable = str_replace(",",".",$request->payable);
            $sale->paid = str_replace(",",".",$request->paid);
            $sale->remaining = str_replace(",",".",$request->remaining);
            $sale->description = $request->description;

            $update = $sale->save();

            return redirect()->route('admin.sales.edit',[
                'update' => $update,
                $sale->id => $sale->id
            ]);

        }elseif(isset($request->delete)){
            $sale = SalesModel::findOrFail($id);
            $sale->status = "0";

            $delete = $sale->save();

            return redirect()->route('admin.sales.index',[
                'delete' => $delete,
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
