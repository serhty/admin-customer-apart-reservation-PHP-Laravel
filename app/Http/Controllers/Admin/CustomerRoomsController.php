<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CustomerRoomsModel;
use App\Models\Admin\ApartModel;
use Illuminate\Support\Facades\DB;
use App\Models\Apart\RoomsModel;
use App\Models\Apart\RoomsPicturesModel;

class CustomerRoomsController extends Controller
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

    public function rooms($id)
    {
        $apart = ApartModel::findOrFail($id);
        $rooms = RoomsModel::where([["status","=","1"],["apart_id","=",$id]])->orderBy('id','ASC')->get();
        return view('admin.customers.customer-rooms',compact('rooms'));
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

        $room = RoomsModel::findOrFail($id);

        $room_pictures = RoomsPicturesModel::where([["status","=","1"],["room_id","=",$id]])->orderBy('id','ASC')->get();

        return view('admin.customers.customer-rooms-update',compact([['room'],['room_pictures']]));
        
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
        $room = RoomsModel::findOrFail($id);
        $apart_id = $room->apart_id;

        echo $apart_id;


        if(isset($request->save)){
            $room->apart_id = $apart_id;
            $room->room_name = $request->room_name;
            $room->room_concept = $request->room_concept;
            $room->room_description = $request->room_description;
            $room->room_info = $request->room_info;
            $room->room_price = str_replace(",",".",$request->room_price);
            $room->room_discount = $request->room_discount;
    
            if(!empty($request->room_discount)){
                $room->room_discounted_price = ($request->room_price - (($request->room_price*$request->room_discount)/100));
                $room->room_final_price = $room->room_discounted_price;
            }else{
                $room->room_discounted_price = $request->room_price;
                $room->room_final_price = $request->room_price;
            }

            $room->wifi = $request->wifi;
            $room->mini_bar = $request->mini_bar;
            $room->bathtub = $request->bathtub;
            $room->ac_dryer_machine = $request->ac_dryer_machine;
            $room->tv = $request->tv;
            $room->safe = $request->safe;
            $room->balcony = $request->balcony;
            $room->kitchen = $request->kitchen;
            $room->washing_machine = $request->washing_machine;
            $room->refrigerator = $request->refrigerator;
            $room->dishwasher = $request->dishwasher;
            $room->air_conditioning = $request->air_conditioning;
            $room->smoke_detector = $request->smoke_detector;

            if($request->hasFile('image')){
                foreach($request->image as $image){
                    $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
                    $imageName = substr(str_shuffle($str), 0, 10).'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images'),$imageName);
                    $room_image = new RoomsPicturesModel;
                    $room_image->status = "1";
                    $room_image->apart_id = $apart_id;
                    $room_image->room_id = $room->id;
                    $room_image->cover = "0";
                    $room_image->image = 'images/'.$imageName;
                    $add_image = $room_image->save();
                }
            }

            $update = $room->save();

            $room_pictures = RoomsPicturesModel::where([["status","=","1"],["room_id","=",$room->id]])->orderBy('id','ASC')->get();


            return redirect()->route('admin.rooms.edit',[
                'update' => $update,
                $room->id => $room->id
            ])->with(compact('room_pictures'));

        }elseif(isset($request->delete)){
            $room->status = "0";

            $delete = $room->save();

            return redirect()->route('admin.rooms.index',[
                'delete' => $delete,
            ]);
        }elseif(isset($request->make_cover)){

            $oda = DB::table('room_imageleri')->select('*')->where("room_id","=",$room->id)->get();
            $e_cover_picture = RoomsPicturesModel::where([["status","=","1"],["cover","=","1"],["room_id","=",$room->id]])->first();
            if(!empty($e_cover_picture)){
                $e_cover_picture->cover = "0";
                $e_update = $e_cover_picture->save();
            }

            $cover_picture_id = $_POST['make_cover'];
            $cover_picture = RoomsPicturesModel::findOrFail($cover_picture_id);
            $cover_picture->cover = "1";

            $update = $cover_picture->save();

            $room_pictures = RoomsPicturesModel::where([["status","=","1"],["room_id","=",$room->id]])->orderBy('id','ASC')->get();

            return redirect()->route('admin.rooms.edit',[
                'update' => $update,
                $room->id => $room->id
            ])->with(compact('room_pictures'));

        }elseif(isset($request->image_delete)){
            $delete_picture_id = $_POST['image_delete'];
            $delete_picture = RoomsPicturesModel::findOrFail($delete_picture_id);
            $delete_picture->status = "0";
            $delete_picture->cover = "0";


            $update = $delete_picture->save();

            $room_pictures = RoomsPicturesModel::where([["status","=","1"],["room_id","=",$room->id]])->orderBy('id','ASC')->get();

            return redirect()->route('admin.rooms.edit',[
                'update' => $update,
                $room->id => $room->id
            ])->with(compact('room_pictures'));
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
