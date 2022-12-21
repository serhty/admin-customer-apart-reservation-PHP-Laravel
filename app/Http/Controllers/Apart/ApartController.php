<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apart\ApartModel;
use App\Models\Apart\ApartPicturesModel;
use Illuminate\Support\Facades\Auth;
use App\Models\Apart\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApartController extends Controller
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
            $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
            $apart_id = $apart[0]->id;

            $apart_pictures = ApartPicturesModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();
            
            return view('apart.apart',compact([['apart'],['apart_pictures']]));
        }else{
            return view('apart.apart',compact([['apart'],['apart_pictures']]));
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
            if(isset($request->save)){
                $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
                $apart_id = $apart[0]->id;

                $apart = ApartModel::findOrFail($apart_id);
                $apart->apart_name = $request->apart_name;
                $apart->apart_concept = $request->apart_concept;
                $apart->apart_link = Str::slug($request->apart_name);
                $apart->apart_address = $request->apart_address;
                $apart->apart_phone1 = $request->apart_phone1;
                $apart->apart_phone2 = $request->apart_phone2;
                $apart->apart_whatsapp = $request->apart_whatsapp;
                $apart->apart_mail = $request->apart_mail;
                $apart->apart_facebook = $request->apart_facebook;
                $apart->apart_instagram = $request->apart_instagram;
                $apart->apart_youtube = $request->apart_youtube;
                $apart->apart_twitter = $request->apart_twitter;
                $apart->apart_bank1 = $request->apart_bank1;
                $apart->apart_bank2 = $request->apart_bank2;
                $apart->apart_description = $request->apart_description;
                $apart->apart_info = $request->apart_info;
                $apart->apart_price = str_replace(",",".",$request->apart_price);
                $apart->apart_discount = $request->apart_discount;

                if(!empty($request->apart_discount)){
                    $apart->apart_discounted_price = ($request->apart_price - (($request->apart_price*$request->apart_discount)/100));
                    $apart->apart_final_price = $apart->apart_discounted_price;
                }else{
                    $apart->apart_discounted_price = $request->apart_price;
                    $apart->apart_final_price = $request->apart_price;
                }

                $apart->next_sea = $request->next_sea;
                $apart->spa = $request->spa;
                $apart->restaurant = $request->restaurant;
                $apart->disabled_friendly = $request->disabled_friendly;
                $apart->laundry = $request->laundry;
                $apart->car_park = $request->car_park;
                $apart->wifi = $request->wifi;
                $apart->rent_car = $request->rent_car;
                $apart->transfer = $request->transfer;
                $apart->bath = $request->bath;
                $apart->pool = $request->pool;
                $apart->wheelchair = $request->wheelchair;
                $apart->kid_friendly = $request->kid_friendly;

                if($request->hasFile('image')){
                    foreach($request->image as $image){
                        $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
                        $imageName = substr(str_shuffle($str), 0, 10).'.'.$image->getClientOriginalExtension();
                        $image->move(public_path('images'),$imageName);
                        $apart_image = new ApartPicturesModel;
                        $apart_image->status = "1";
                        $apart_image->apart_id = $apart_id;
                        $apart_image->cover = "0";
                        $apart_image->image = 'images/'.$imageName;
                        $add = $apart_image->save();
                    }
                }

                $update = $apart->save();

                $apart_pictures = ApartPicturesModel::where([["status","=","1"],["apart_id","=",$apart_id]])->orderBy('id','ASC')->get();

                return redirect()->route('apart.apart.edit',[
                    'update' => $update,
                    $apart->id => $user_id
                ])->with(compact('apart_pictures'));

            }elseif(isset($request->make_cover)){

                $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
                $apart_id = $apart[0]->id;
                $e_cover_picture = ApartPicturesModel::where([["status","=","1"],["cover","=","1"],["apart_id","=",$apart_id]])->first();
                if(!empty($e_cover_picture)){
                    $e_cover_picture->cover = "0";
                    $e_update = $e_cover_picture->save();
                }

                $cover_picture_id = $_POST['make_cover'];
                $cover_picture = ApartPicturesModel::findOrFail($cover_picture_id);
                $cover_picture->cover = "1";

                $update = $cover_picture->save();

                return redirect()->route('apart.apart.edit',[
                    'update' => $update,
                    $id => $user_id
                ]);

            }elseif(isset($request->image_delete)){
                $delete_picture_id = $_POST['image_delete'];
                $delete_picture = ApartPicturesModel::findOrFail($delete_picture_id);
                $delete_picture->status = "0";
                $delete_picture->cover = "0";


                $update = $delete_picture->save();

                return redirect()->route('apart.apart.edit',[
                    'update' => $update,
                    $id => $user_id
                ]);
            }
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
