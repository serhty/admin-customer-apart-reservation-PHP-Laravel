<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\NotesModel;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = NotesModel::where("status","!=","0")->orderBy('id','ASC')->get();
        return view('admin.notes.notes',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notes.note-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new NotesModel;
        $note->status = "2";
        $note->note = $request->note;

        $add = $note->save();

        return redirect()->route('admin.notes.edit',[
            'add' => $add,
            $note->id => $note->id
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
        $note = NotesModel::findOrFail($id);
        return view('admin.notes.note-update',compact('note'));
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
            $note = NotesModel::findOrFail($id);
            $note->note = $request->note;

            $update = $note->save();

            return redirect()->route('admin.notes.edit',[
                'update' => $update,
                $note->id => $note->id
            ]);

        }elseif(isset($request->done)){
            $note = NotesModel::findOrFail($id);
            $note->status = "1";
            $note->note = $request->note;

            $update = $note->save();

            return redirect()->route('admin.notes.edit',[
                'update' => $update,
                $note->id => $note->id
            ]);

        }elseif(isset($request->delete)){
            $note = NotesModel::findOrFail($id);
            $note->status = "0";

            $delete = $note->save();

            return redirect()->route('admin.notes.index',[
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
