@extends('Adminlfc.base3')
@section('content')

<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Transaksi</li>
        </ol>
        <!-- End Breadcrumbs-->

        <!-- Tabel Kategori -->
        <table class="table table-striped table-hover table-bordered">
            <form action="/Tambahdatabayar" method="post">
                    <tr>
                        @csrf
                            <th>No Booking</th>
                            <th>Jumlah Bayar</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Kode Transaksi</th>
                            <th>Tanggal Transaksi</th>
                    </tr>
                    
                    <tr>
                        <th>
                            <select name="bkg_id" class="form-control">
                        @foreach ($data as $data)
                            <option value="{{$data->id_booking}}">{{ $data->No_BK}}</option>
                        @endforeach
                            </select>
                            </th>
                    
                            <th><input class="form-control" type="text" name="jumlah" required="required"> <br/></th>
                            
                            <th> 
                            <select name="status" class="form-control" value="status" required="required">
                            <option >Proses</option>
                            <option >Jadi</option>
                            <option >Batal</option>
                            </select>
                            </th>
                            
                           
                            <th> 
                                <select name="keterangan" class="form-control" value="keterangan" required="required">
                            <option >Segerah Melakukan Transaksi BNI 0865xxxx AT.LFC </option>
                            <option >Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC</option>
                            <option >Segerah Melakukan Transaksi MANDIRI 01265xxxx AT.LFC</option>
                                </select>
                            </th>

                            <th><input class="form-control" type="text" name="kode_transaksi" required="required"> <br/></th>

                            <th><input class="form-control" type="date" name="tgl_bayar" required="required"> <br/></th>
                                                    
                            
                            
                            <td align=center>
                                <input class="btn btn-success" type="submit" value="Simpan Data">
                            </td>
                    </tr>
                        </form>
            </table>
                      @endsection