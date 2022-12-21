<?php

namespace App\Http\Controllers\Apart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Apart\NotesModel;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard('apart')->user()->id;

        $apart = DB::table('apart_infos')->select('*')->where("customer_id","=",$user_id)->get();
        $apart_id = $apart[0]->id;

        $notes = NotesModel::where([["status","!=","0"],["customer_id","=",$user_id]])->orderBy('id','ASC')->get();
        return view('apart.notes.notes',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apart.notes.note-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::guard('apart')->user()->id;
        $note = new NotesModel;
        $note->status = "2";
        $note->customer_id = $user_id;
        $note->note = $request->note;

        $add = $note->save();

        return redirect()->route('apart.notes.edit',[
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
        $user_id = Auth::guard('apart')->user()->id;

        $note = NotesModel::findOrFail($id);

        if($note->customer_id == $user_id){
            return view('apart.notes.note-update',compact('note'));
        }else{
            return view('not-authorized');
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
        $note = NotesModel::findOrFail($id);
        
        if(isset($request->save)){
            $note->note = $request->note;

            $update = $note->save();

            return redirect()->route('apart.notes.edit',[
                'update' => $update,
                $note->id => $note->id
            ]);

        }elseif(isset($request->done)){
            $note->status = "1";
            $note->note = $request->note;

            $update = $note->save();

            return redirect()->route('apart.notes.edit',[
                'update' => $update,
                $note->id => $note->id
            ]);

        }elseif(isset($request->delete)){
            $note->status = "0";

            $delete = $note->save();

            return redirect()->route('apart.notes.index',[
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
