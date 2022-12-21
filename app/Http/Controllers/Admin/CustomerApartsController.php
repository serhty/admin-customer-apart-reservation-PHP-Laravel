<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ApartModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Apart\ApartPicturesModel;

class CustomerApartsController extends Controller
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
        $apart = ApartModel::findOrFail($id);
        $apart_pictures = ApartPicturesModel::where([["status","=","1"],["apart_id","=",$id]])->orderBy('id','ASC')->get();
        return view('admin.aparts.apart-update',compact([['apart'],['apart_pictures']]));
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
            $apart = ApartModel::findOrFail($id);
            $apart->apart_name = $request->apart_name;
            $apart->apart_concept = $request->apart_concept;
            $apart->apart_link = Str::slug($request->apart_name);
            $apart->apart_address = $request->apart_address;
            $apart->apart_phone1 = $request->apart_phone1;
            $apart->apart_phone2 = $request->apart_phone2;
            $apart->apart_whatsapp = $request->apart_whatsapp;

            $location1 = str_replace('<iframe src="','',$request->apart_location);
            $location2 = str_replace('" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>','',$location1);
            $apart->apart_location = $location2;
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
            $apart->populer = $request->populer;
            $apart->recommended = $request->recommended;
            $apart->last_visited = $request->last_visited;
            $apart->apart_note = $request->apart_note;
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
                    $apart_image->apart_id = $id;
                    $apart_image->cover = "0";
                    $apart_image->image = 'images/'.$imageName;
                    $add = $apart_image->save();
                }
            }

            $update = $apart->save();

            $apart_pictures = ApartPicturesModel::where([["status","=","1"],["apart_id","=",$id]])->orderBy('id','ASC')->get();

            return redirect()->route('admin.aparts.edit',[
                'update' => $update,
                $apart->id => $id
            ])->with(compact('apart_pictures'));

        }elseif(isset($request->make_cover)){

            $e_cover_picture = ApartPicturesModel::where([["status","=","1"],["cover","=","1"],["apart_id","=",$id]])->first();
            if(!empty($e_cover_picture)){
                $e_cover_picture->cover = "0";
                $e_update = $e_cover_picture->save();
            }

            $cover_picture_id = $_POST['make_cover'];
            $cover_picture = ApartPicturesModel::findOrFail($cover_picture_id);
            $cover_picture->cover = "1";

            $update = $cover_picture->save();

            return redirect()->route('admin.aparts.edit',[
                'update' => $update,
                $id => $id
            ]);

        }elseif(isset($request->image_delete)){
            $delete_picture_id = $_POST['image_delete'];
            $delete_picture = ApartPicturesModel::findOrFail($delete_picture_id);
            $delete_picture->status = "0";
            $delete_picture->cover = "0";


            $update = $delete_picture->save();

            return redirect()->route('admin.aparts.edit',[
                'update' => $update,
                $id => $id
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
