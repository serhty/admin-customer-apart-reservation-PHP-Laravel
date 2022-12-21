<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SettingsModel;

class SettingsController extends Controller
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
        $settings = SettingsModel::findOrFail($id);
        return view('admin.settings',compact('settings'));
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

        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $settings = SettingsModel::findOrFail($id);
        $settings->site_url = $request->site_url;
        $settings->site_title = $request->site_title;
        $settings->site_description = $request->site_description;
        $settings->site_keywords = $request->site_keywords;
        $settings->about = $request->about;
        $settings->user_agreement = $request->user_agreement;
        $settings->cookie_policy = $request->cookie_policy;

        if($request->hasFile('logo')){
            $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
            $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('images'),$imageName);
            $settings->logo = 'images/'.$imageName;
        }

        $update = $settings->save();

        return redirect()->route('admin.settings.edit',[
            'update' => $update,
            $id => 1
        ]);

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
