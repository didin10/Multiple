<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Members;
use App\Pembokingan;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bkg = Pembokingan::with(['get_member'])->paginate(8);
        return view('Pembokingan.DataBooking',compact('bkg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Members::all();
        return view('Pembokingan.AddBooking', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('booking')->insert([
        'id_booking' => $request->id_booking,
        'tgl_booking' => $request->tgl_booking,
        'waktu_booking' => $request->waktu_booking,
        'lapangan' => $request->lapangan,
        'selesai' => $request->selesai,
        'No_BK' => $request->No_BK,
        'status' => $request->status,
        'gmail' => $request->gmail,
        'member_id' => $request->member_id


        ]);
        return redirect('/DataBooking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Members::all();
        return view('Pembokingan.DataBooking');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_booking)
    {
        $merubah = Members::all();
        $booking = DB::table('booking')->where('id_booking',$id_booking)->get();

        return view('Pembokingan.editbooking',compact('merubah','booking'));
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
        DB::table('booking')->where('id_booking',$request->id_booking)->update([
             'id_booking'=>$request->id_booking,
            'tgl_booking'=>$request->tgl_booking,
            'waktu_booking'=>$request->waktu_booking,
            'lapangan' => $request->lapangan,
            'selesai'=>$request->selesai,
            'No_BK'=>$request->No_BK,
            'status'=>$request->status,
            'gmail' => $request->gmail,
            'member_id'=>$request->member_id

        ]);

        return redirect('/DataBooking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('booking')->where('id_booking',$id)->delete();
     return redirect('/DataBooking');   
    }
}
