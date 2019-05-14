<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembayaran;
use App\Pembokingan;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $byr = Pembayaran::with(['get_booking'])->paginate(8);
        return view('Pembayaran.Datapembayaran',compact('byr'));
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $byr = Pembayaran::with(['get_booking'])
        ->join('booking', 'booking.id_booking', '=', 'pembayaran.bkg_id')
        ->where('kode_transaksi','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('Pembayaran.Datapembayaran',['byr' => $byr]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Pembokingan::all();
        return view('Pembayaran.AddBayar', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pembayaran')->insert([
        'id' => $request->id,
        'bkg_id' => $request->bkg_id,
        'jumlah' => $request->jumlah,
        'status' => $request->status,
        'keterangan' => $request->keterangan,
        'kode_transaksi' => $request->kode_transaksi,
        'tgl_bayar' => $request->tgl_bayar
        


        ]);
        return redirect('/Datapembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $byr = DB::table('pembayaran')->where('id',$id)->get();
        return view('Pembayaran.viewbayar',['byr' => $byr]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merubah = Pembokingan::all();
        $bayar = DB::table('pembayaran')->where('id',$id)->get();

        return view('Pembayaran.editbayar',compact('merubah','bayar'));
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
        DB::table('pembayaran')->where('id',$request->id)->update([
        'id' => $request->id,
        'bkg_id' => $request->bkg_id,
        'jumlah' => $request->jumlah,
        'status' => $request->status,
        'keterangan' => $request->keterangan,
        'kode_transaksi' => $request->kode_transaksi,
        'tgl_bayar' => $request->tgl_bayar
        ]);

        return redirect('/Datapembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pembayaran')->where('id',$id)->delete();
     return redirect('/Datapembayaran');
    }
}
