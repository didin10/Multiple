<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use Illuminate\Support\Facades\DB;
use \Validator,\Input,\Redirect,\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $even = Events::all();
         return view('Events.Data_Event',compact('even'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Events.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $even = new events;
        $even->id = $request->id;
        $even->nama_event = $request->nama_event;
        $even->tgl_event = $request->tgl_event;
        $even->batas_umur = $request->batas_umur;
        $even->keterangan = $request->keterangan;
        $even->organizer = $request->organizer;

        $even->save();
       // \Session::flash('flash_message','Data Berhasil di Simpan');
        return redirect('/Events');
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
        return view('Events.editevents');
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
        $even = events::find($id);
        $even->id = $request->id;
        $even->nama_event = $request->nama_event;
        $even->tgl_event = $request->tgl_event;
        $even->batas_umur = $request->batas_umur;
        $even->keterangan = $request->keterangan;
        $even->organizer = $request->organizer;

        $even->save();
       // \Session::flash('flash_message','Data Berhasil di Update');
        return redirect('/Events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $even = Events::destroy($id);
        return redirect('/Events');   
    }
}
