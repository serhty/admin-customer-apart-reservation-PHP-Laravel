<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SlidersModel;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = SlidersModel::where("status","=","1")->orderBy('id','ASC')->get();
        return view('admin.sliders.sliders',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.slider-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new SlidersModel;
        $slider->status = "1";
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->url = $request->url;

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:5120'
        ]);

        if($request->hasFile('image')){
            $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
            $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$imageName);
            $slider->image = 'images/'.$imageName;
        }

        $add = $slider->save();

        return redirect()->route('admin.sliders.edit',[
            'add' => $add,
            $slider->id => $slider->id
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
        $slider = SlidersModel::findOrFail($id);
        return view('admin.sliders.slider-update',compact('slider'));
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
            $slider = SlidersModel::findOrFail($id);
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->url = $request->url;
            
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:5120'
            ]);

            if($request->hasFile('image')){
                $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
                $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'),$imageName);
                $slider->image = 'images/'.$imageName;
            }

            $update = $slider->save();

            return redirect()->route('admin.sliders.edit',[
                'update' => $update,
                $slider->id => $slider->id
            ]);

        }elseif(isset($request->delete)){
            $slider = SlidersModel::findOrFail($id);
            $slider->status = "0";

            $delete = $slider->save();

            return redirect()->route('admin.sliders.index',[
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
