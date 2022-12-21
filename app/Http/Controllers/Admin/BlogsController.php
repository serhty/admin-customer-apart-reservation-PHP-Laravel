<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\BlogsModel;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = BlogsModel::where("status","=","1")->orderBy('id','ASC')->get();
        return view('admin.blogs.blogs',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.blog-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new BlogsModel;
        $blog->status = "1";
        $blog->title = $request->title;
        $blog->link = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->keywords = $request->keywords;
        $blog->content = $request->content;

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:5120'
        ]);

        if($request->hasFile('image')){
            $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
            $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$imageName);
            $blog->image = 'images/'.$imageName;
        }

        $add = $blog->save();

        return redirect()->route('admin.blogs.edit',[
            'add' => $add,
            $blog->id => $blog->id
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
        $blog = BlogsModel::findOrFail($id);
        return view('admin.blogs.blog-update',compact('blog'));
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
            $blog = BlogsModel::findOrFail($id);
            $blog->title = $request->title;
            $blog->link = Str::slug($request->title);
            $blog->description = $request->description;
            $blog->keywords = $request->keywords;
            $blog->content = $request->content;
            
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:5120'
            ]);

            if($request->hasFile('image')){
                $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
                $imageName = substr(str_shuffle($str), 0, 10).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'),$imageName);
                $blog->image = 'images/'.$imageName;
            }

            $update = $blog->save();

            return redirect()->route('admin.blogs.edit',[
                'update' => $update,
                $blog->id => $blog->id
            ]);

        }elseif(isset($request->delete)){
            $blog = BlogsModel::findOrFail($id);
            $blog->status = "0";

            $delete = $blog->save();

            return redirect()->route('admin.blogs.index',[
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
