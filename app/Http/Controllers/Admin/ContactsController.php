<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ContactsModel;

class ContactsController extends Controller
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
        $contacts = ContactsModel::findOrFail($id);
        return view('admin.contacts',compact('contacts'));
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
        $contacts = ContactsModel::findOrFail($id);
        $contacts->phone = $request->phone;
        $contacts->mail = $request->mail;
        $contacts->address = $request->address;

        $location1 = str_replace('<iframe src="','',$request->location);
		$location2 = str_replace('" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>','',$location1);
        $contacts->location = $location2;

        $contacts->facebook = $request->facebook;
        $contacts->instagram = $request->instagram;
        $contacts->twitter = $request->twitter;
        $contacts->youtube = $request->youtube;
        $contacts->linkedin = $request->linkedin;
        
        $update = $contacts->save();

        return redirect()->route('admin.contacts.edit',[
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
