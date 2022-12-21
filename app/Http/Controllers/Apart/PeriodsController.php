<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apart\PeriodsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Apart\RoomsModel;
use App\Models\Apart\ApartModel;
use Illuminate\Support\Facades\DB;

class PeriodsController extends Controller
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

        $user_id = Auth::guard('apart')->user()->id;
        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        if(isset($request->add)){
            $room = RoomsModel::where("id","=",$request->room_id)->orderBy('id','ASC')->get();
            $period = new PeriodsModel;
            $period->status = "1";
            $period->apart_id = $apart_id;
            $period->room_id = $request->room_id;
            $period->room_count = $request->room_count;
            $period->period_start = date("Y-m-d", strtotime($request->period_start));
            $period->period_end = date("Y-m-d", strtotime($request->period_end));
            $period->period_price = str_replace(",",".",$request->period_price);
            $period->period_discount = $request->period_discount;

            if(!empty($request->period_discount)){
                $period->period_discounted_price = ($request->period_price - (($request->period_price*$request->period_discount)/100));
                $period->period_final_price = $period->period_discounted_price;
            }else{
                $period->period_discounted_price = $request->period_price;
                $period->period_final_price = $request->period_price;
            }

            $add = $period->save();

            return redirect()->route('apart.rooms.index',[
                'add' => $add,
            ]);
        }

        $rooms = RoomsModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        return view('apart.rooms.rooms',compact('rooms'));

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

        $periods = PeriodsModel::where([["room_id","=",$id],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        $room = RoomsModel::where([["id","=",$id],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        return view('apart.periods.periods',compact([['periods','room']]));

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
        if(isset($request->add)){
            $user_id = Auth::guard('apart')->user()->id;
            $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
            $apart_id = $apart[0]->id;
            $room = RoomsModel::where("id","=",$id)->orderBy('id','ASC')->get();
            $period = new PeriodsModel;
            $period->status = "1";
            $period->apart_id = $apart_id;
            $period->room_id = $id;
            $period->room_count = $request->room_count;
            $period->period_start = $request->period_start;
            $period->period_end = $request->period_end;
            $period->period_price = str_replace(",",".",$request->period_price);
            $period->period_discount = $request->period_discount;

            if(!empty($request->period_discount)){
                $period->period_discounted_price = ($request->period_price - (($request->period_price*$request->period_discount)/100));
                $period->period_final_price = $period->period_discounted_price;
            }else{
                $period->period_discounted_price = $request->period_price;
                $period->period_final_price = $request->period_price;
            }

            $add = $period->save();

            return redirect()->route('apart.periods.edit',[
                'add' => $add,
                $room->id => $room->id
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
        $period = PeriodsModel::find($id);
        $delete = $period->delete();

        return redirect()->route('apart.rooms.index',[
            'delete' => $delete,
        ]);
    }
}
