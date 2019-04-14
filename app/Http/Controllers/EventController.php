<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

         $even = DB::table('events')->get();
         return view('Events.Data_Event',['even' => $even]);
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
        DB::table('events')->insert([
        'nama_event' => $request->nama_event,
        'tgl_event' => $request->tgl_event,
        'batas_umur' => $request->batas_umur,
        'keterangan' => $request->keterangan,
        'organizer' => $request->organizer
    ]);
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
        $even = DB::table('events')->where('id',$id)->get();

        return view('Events.editevents',['even' => $even]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        DB::table('events')->where('id',$request->id)->update([
        'nama_event' => $request->nama_event,
        'tgl_event' => $request->tgl_event,
        'batas_umur' => $request->batas_umur,
        'keterangan' => $request->keterangan,
        'organizer' => $request->organizer
    ]);
       // \Session::flash('flash_message','Data Berhasil di Update');
        return redirect('/Events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('events')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('/Events');
    }
}
