<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Apart\RoomsModel;
use App\Models\Apart\ApartModel;
use App\Models\Apart\ReservationsModel;
use App\Models\Apart\ApartSupportsModel;
use App\Models\Apart\NotesModel;

class HomeController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('apart')->user()->id;

        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        $rooms = RoomsModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

        $reservations = ReservationsModel::where([["status","!=","0"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

        $supports = ApartSupportsModel::where([["status","!=","0"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

        $notes = NotesModel::where([["status","!=","0"],["customer_id","=",$user_id]])->orderBy('id','ASC')->get();

        $pending_supports = ApartSupportsModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->limit(10)->get();

        $pending_notes = NotesModel::where([["status","=","2"],["customer_id","=",$user_id]])->orderBy('id','ASC')->limit(10)->get();

        return view('apart.home',compact([['rooms'],['reservations'],['supports'],['notes'],['pending_supports'],['pending_notes']]));
    }
}
