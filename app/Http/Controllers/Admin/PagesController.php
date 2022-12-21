<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PagesModel;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = PagesModel::where("status","=","1")->orderBy('id','ASC')->get();
        return view('admin.pages.pages',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.page-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new PagesModel;
        $page->status = "1";
        $page->title = $request->title;
        $page->link = Str::slug($request->title);
        $page->description = $request->description;
        $page->keywords = $request->keywords;
        $page->content = $request->content;

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:5120'
        ]);

        if($request->hasFile('image')){
            $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
            $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$imageName);
            $page->image = 'images/'.$imageName;
        }

        $add = $page->save();

        return redirect()->route('admin.pages.edit',[
            'add' => $add,
            $page->id => $page->id
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
        $page = PagesModel::findOrFail($id);
        return view('admin.pages.page-update',compact('page'));
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
            $page = PagesModel::findOrFail($id);
            $page->title = $request->title;
            $page->link = Str::slug($request->title);
            $page->description = $request->description;
            $page->keywords = $request->keywords;
            $page->content = $request->content;
            
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:5120'
            ]);

            if($request->hasFile('image')){
                $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
                $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'),$imageName);
                $page->image = 'images/'.$imageName;
            }

            $update = $page->save();

            return redirect()->route('admin.pages.edit',[
                'update' => $update,
                $page->id => $page->id
            ]);

        }elseif(isset($request->delete)){
            $page = PagesModel::findOrFail($id);
            $page->status = "0";

            $delete = $page->save();

            return redirect()->route('admin.pages.index',[
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
