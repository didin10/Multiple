<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
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
        $memberku = Members::all();
         return view('Members.Data_Member',compact('memberku'));
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
        $memberku = new member;
        $memberku->id = $request->id;
        $memberku->nama_member = $request->nama_member;
        $memberku->alamat = $request->alamat;
        $memberku->umur = $request->umur;
        $memberku->telfon = $request->telfon;
        $memberku->tgl_daftar = $request->tgl_daftar;

        $even->save();
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
        return view('Members.editmember');
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
        $memberku = member::find($id);
        $memberku->id = $request->id;
        $memberku->nama_member = $request->nama_member;
        $memberku->alamat = $request->alamat;
        $memberku->umur = $request->umur;
        $memberku->telfon = $request->telfon;
        $memberku->tgl_daftar = $request->tgl_daftar;

        $even->save();
       // \Session::flash('flash_message','Data Berhasil di Simpan');
        return redirect('/Members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memberku = Members::destroy($id);
       return redirect('/Members');
    }
}
