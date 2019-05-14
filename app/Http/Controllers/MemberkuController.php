<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Validator,\Input,\Redirect,\Session;

class MemberkuController extends Controller
{
	public function index()
    {
        $membersku = DB::table('member')->get();
         return view('MemberBR.Data_Memberku',['memberku' => $membersku]);
    }

    public function create()
    {
        return view('MemberBR.Create');
    }

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
        return view('/suksesmember') ;
    }

}
