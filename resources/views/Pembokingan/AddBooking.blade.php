@extends('Adminlfc.base3')
@section('content')

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Booking</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Kategori -->
        <table class="table table-striped table-hover table-bordered">
            <form action="/TambahdataBooking" method="post">
                    <tr>
                        @csrf
                            <th>Tanggal Booking</th>
                            <th>Jam Booking</th>
                            <th>Lapangan</th>
                            <th>Selesai</th>
                            <th>No Boking</th>
                            <th>Status</th>
                            <th>Gmail</th>
                            <th>Member Id</th>
                    </tr>
                    
                    <tr>
                    
                            <th><input class="form-control" type="date" name="tgl_booking" required="required"> <br/></th>
                            <th><input class="form-control" type="time" name="waktu_booking" required="required"> <br/></th>
                            <th> 
                                <select name="lapangan" class="form-control" value="lapangan" required="required">
                            <option >Pilih Lapangan</option>
                            <option >Lapangan Vinyl</option>
                            <option >Lapangan Parquette</option>
                            <option >Karpet Plastik</option>
                            <option >Lapangan Taraflex</option>
                            <option >Lapangan Sintetis</option>

                                    
                                </select>
                            </th>
                            <th><input class="form-control" type="time" name="selesai" required="required"> <br/></th>
                            <th><input class="form-control" type="text" name="No_BK" required="required"> <br/></th>
                        <th>
                            <select name="status" class="form-control" value="status" required="required">
                            <option >Jadi</option>
                            <option >Batal</option>
                            <option>Proses</option>
                            
                            </select>
                        </th>
                        <th><input class="form-control" type="gmail" name="gmail" required="required"> <br/></th>                            
                            
                            <th>
                            <select name="member_id" class="form-control">
                        @foreach ($data as $data)
                            <option value="{{$data->id}}">{{ $data->nama_member}}</option>
                        @endforeach
                            </select>
                            </th>
                            <td align=center>
                                <input class="btn btn-success" type="submit" value="Simpan Data">
                            </td>
                    </tr>
                        </form>
            </table>
                      @endsection