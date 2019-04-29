<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use \Validator,\Input,\Redirect,\Session;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberku = DB::table('member')->get();
         return view('Members.Data_Member',['memberku' => $memberku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Members.Create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       DB::table('member')->insert([
        'nama_member' => $request->nama_member,
        'alamat' => $request->alamat,
        'umur' => $request->umur,
        'telfon' => $request->telfon,
        'tgl_daftar' => $request->tgl_daftar
    ]);
       // \Session::flash('flash_message','Data Berhasil di Simpan');
        return redirect('/Members');
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
        $memberku = DB::table('member')->where('id',$id)->get();
        return view('Members.editmember',['memberku' => $memberku]);
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
       DB::table('member')->where('id',$request->id)->update(['nama_member' => $request->nama_member,'alamat' => $request->alamat,
        'umur' => $request->umur,
        'telfon' => $request->telfon,
        'tgl_daftar' => $request->tgl_daftar      
       ]);
       // \Session::flash('flash_message','Data Berhasil di Simpan');
        return redirect('/Members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('member')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('/Members');
    }
}
