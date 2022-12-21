<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apart\ReservationsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Apart\RoomsModel;
use App\Models\Apart\PeriodsModel;
use DateTime;
use DateInterval;
use DatePeriod;
use Illuminate\Support\Facades\DB;
use App\Models\Apart\ApartModel;

class ReservationsController extends Controller
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

        $rooms = RoomsModel::where([["apart_id","=",$apart_id]])->get();
        $reservations = ReservationsModel::where([["status","!=","0"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
        return view('apart.reservations.reservations',compact(['reservations','rooms']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::guard('apart')->user()->id;
        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        $rooms = RoomsModel::where([["apart_id","=",$apart_id],["status","=","1"]])->orderBy('id','ASC')->get();
        return view('apart.reservations.reservation-add',compact('rooms'));
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

        $user_id = Auth::guard('apart')->user()->id;
        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;
        $rooms = RoomsModel::where([["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

        if($reservation->apart_id == $apart_id){
            return view('apart.reservations.reservation-update',compact([['reservation'],['rooms']]));
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
        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;
        $rooms = RoomsModel::where([["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

        if(isset($request->save)){
            $reservation = ReservationsModel::findOrFail($id);
            $reservation->customer_name = $request->customer_name;
            $reservation->customer_surname = $request->customer_surname;
            $reservation->customer_phone = $request->customer_phone;
            $reservation->customer_mail = $request->customer_mail;
            $reservation->customer_address = $request->customer_address;

            $update = $reservation->save();

            return redirect()->route('apart.reservations.edit',[
                'update' => $update,
                $reservation->id => $reservation->id
            ]);

        }elseif(isset($request->delete)){
            $reservation = ReservationsModel::findOrFail($id);
            $reservation->status = "0";

            $delete = $reservation->save();

            return redirect()->route('apart.reservations.index',[
                'delete' => $delete,
            ]);

        }elseif(isset($request->done)){
            $reservation = ReservationsModel::findOrFail($id);
            $reservation->status = "1";

            $update = $reservation->save();

            return redirect()->route('apart.reservations.edit',[
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

    public function check(Request $request)
    {
        if($request->status == "reservation_check"){
            $user_id = Auth::guard('apart')->user()->id;
            $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
            $apart_id = $apart[0]->id;

            $room_id = $_POST['room_id'];
            $oda = RoomsModel::where([["apart_id","=",$apart_id],["id","=",$room_id]])->orderBy('id','ASC')->get();

            $start_date_datetime = $_POST['start_date'];
            $start_date = DateTime::createFromFormat('d-m-Y', $start_date_datetime)->format('Y-m-d');
            
            $end_date_datetime = $_POST['end_date'];
            $end_date = DateTime::createFromFormat('d-m-Y', $end_date_datetime)->format('Y-m-d');

            $interval = DateInterval::createFromDateString('1 day');

            $period = new DatePeriod(new DateTime($start_date), $interval, new DateTime($end_date));

            $max_quota = PeriodsModel::where([["period_start","<=",$start_date],["period_end",">=",$start_date],["room_id","=",$room_id],["status","=","1"]])->orderBy('id','ASC')->get('room_count');
            if(!empty($max_quota[0])){
                $max_quota = $max_quota[0]->room_count;
            }else{
                $max_quota = 0;
            }

            $reservation_num = DB::table("reservations")->select(DB::raw("COUNT(id) as reservation_num"))->where([['start_date', '>=', $start_date],["start_date","<=",$end_date],["room_id","=",$room_id],["status","=","1"]])->get();
            if(!empty($reservation_num[0])){
                $reservation_num = $reservation_num[0]->reservation_num;
            }else{
                $reservation_num = 0;
            }

            $total_price = 0;
            $total_discounted_price = 0;
            $total_final_price = 0;
            
            $vacancies = $max_quota - $reservation_num;

            if ($vacancies <= 0) {
            
                header("Content-type: application/json; charset=UTF-8");
                return json_encode([
                    "result" => "0",
                    "start_date" => $start_date,
                    "end_date" => $end_date
                ]);
            
            } else {
                foreach ($period as $dt) {
                    $price_to_date = $dt->format("Y-m-d");

                    $price_query = PeriodsModel::where([["period_start","<=",$price_to_date],["period_end",">=",$price_to_date],["room_id","=",$room_id],["status","=","1"]])->get();

                    $price_result = $price_query[0]->period_price;
                    $total_price = $total_price + $price_result;
                    $discounted_price_result = $price_query[0]->period_discounted_price;
                    $total_discounted_price = $total_discounted_price + $discounted_price_result;
                    $final_price_result = $price_query[0]->period_final_price;
                    $total_final_price = $total_final_price + $final_price_result;
                    $discount = round((100-(($total_discounted_price/$total_price)*100)),2);
                }

                header("Content-type: application/json; charset=UTF-8");
                return json_encode([
                    "result" => "1",
                    "start_date" => $start_date,
                    "end_date" => $end_date,
                    "price" => $total_price,
                    "discount" => $discount,
                    "final_price" => $total_final_price
                ]);
            }
        }

    }

    public function make(Request $request)
    {

        $user_id = Auth::guard('apart')->user()->id;
        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        if($request->rez_status == "reservation_make"){

            $user_id = Auth::guard('apart')->user()->id;
            $reservation = new ReservationsModel;
            $reservation->status = "1";
            $reservation->room_id = $request->rez_room_id;
            $reservation->apart_id = $apart_id;
            $reservation->start_date = $request->rez_start_date;
            $reservation->end_date = $request->rez_end_date;
            $reservation->reservation_date = date('Y-m-d H:i:s');
            $reservation->price = str_replace(",",".",$request->rez_price);
            $reservation->discount = $request->rez_discount;
            $reservation->final_price = str_replace(",",".",$request->rez_final_price);
            $reservation->booker = "Apart";
            $reservation->count_people = $request->rez_person_num;
            $reservation->customer_name = $request->rez_customer_name;
            $reservation->customer_surname = $request->rez_customer_surname;
            $reservation->customer_phone = $request->rez_customer_phone;
            $reservation->customer_mail = $request->rez_customer_mail;
            $reservation->customer_address = $request->rez_customer_address;

            $add = $reservation->save();

            $rooms = RoomsModel::where([["apart_id","=",$apart_id]])->get();
            $reservations = ReservationsModel::where("status","!=","0")->orderBy('id','ASC')->get();
            return redirect()->route('apart.reservations.reservations',[
                'add' => $add,
                $rooms => $rooms,
                $reservations => $reservations
            ]);

        }
    }

}
