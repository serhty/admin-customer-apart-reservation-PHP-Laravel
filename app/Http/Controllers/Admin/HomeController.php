<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CustomersModel;
use App\Models\Admin\SupportsModel;
use App\Models\Admin\NotesModel;
use App\Models\Admin\ApartModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $customers = CustomersModel::where("status","!=","0")->orderBy('id','ASC')->get();
        $supports = SupportsModel::where([["status","=","1"]])->orderBy('id','ASC')->get();
        $notes = NotesModel::where([["status","=","2"]])->orderBy('id','ASC')->get();
        $aparts = DB::table('apart_infos')->select('*')->where("status","=","1")->get();
        
        return view('admin.home',compact([['customers'],['supports'],['notes'],['aparts']]));


    }
}
