<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ApartModel;
use Illuminate\Support\Facades\DB;
use App\Models\Apart\RoomsModel;
use App\Models\Apart\ReservationsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Apart\PeriodsModel;
use DateTime;
use DateInterval;
use DatePeriod;

class CustomerReservationsController extends Controller
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

    public function reservations($id)
    {
        $apart = ApartModel::findOrFail($id);
        $rooms = RoomsModel::where([["status","=","1"],["apart_id","=",$id]])->orderBy('id','ASC')->get();
        $reservations = ReservationsModel::where([["status","!=","0"],["apart_id","=",$id]])->orderBy('id','ASC')->get();
        return view('admin.customers.customer-reservations',compact(['reservations','rooms']));
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
        $reservation = ReservationsModel::findOrFail($id);
        $apart_id = $reservation->apart_id;
        $rooms = RoomsModel::where([["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        return view('admin.customers.customer-reservations-update',compact([['reservation'],['rooms']]));
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

        if(isset($request->kaydet)){
            $reservation = ReservationsModel::findOrFail($id);
            $reservation->customer_name = $request->customer_name;
            $reservation->customer_surname = $request->customer_surname;
            $reservation->customer_phone = $request->customer_phone;
            $reservation->musteri_mail = $request->musteri_mail;
            $reservation->customer_address = $request->customer_address;

            $update = $reservation->save();

            return redirect()->route('admin.reservations.edit',[
                'update' => $update,
                $reservation->id => $reservation->id
            ]);

        }elseif(isset($request->delete)){
            $reservation = ReservationsModel::findOrFail($id);
            $reservation->status = "0";

            $delete = $reservation->save();

            return redirect()->route('admin.customers.index',[
                'delete' => $delete,
            ]);

        }elseif(isset($request->onayla)){
            $reservation = ReservationsModel::findOrFail($id);
            $reservation->status = "1";

            $update = $reservation->save();

            return redirect()->route('admin.reservations.edit',[
                'update' => $update,
                $reservation->id => $reservation->id
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
