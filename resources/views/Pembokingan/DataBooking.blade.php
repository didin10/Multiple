@extends('Adminlfc.base2')
@section('content')
        <!-- Tabel Kategori -->
       <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">

              <h3 class="box-title">Data Booking</h3>
              <a class="btn btn-success" href="/Tambahbayar"> Transaksi </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <p>Cari Data Booking :</p>
          <form action="/DataBooking/cari" method="GET">
          <input type="text" name="cari" placeholder="Cari Kode Booking .." value="{{ old('cari') }}">
          <input type="submit" value="CARI">
          </form>
    
  <br/>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    
                    <th><center>Tgl Booking</center></th>
                    <th><center>Waktu BOoking</center></th>
                    <th><center>Lapangan</center></th>
                    <th><center>Selesai Booking</center></th>
                    <th><center>Nomor Booking</center></th>
                    <th><center>Status</center></th>
                    <th><center>Gmail</center></th>
                    <th><center>Member</center></th>
                    <th><center>Opsi</center></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($bkg as $data)
                  <tr>
                    
                    
                    <td><center>{{ $data -> tgl_booking }}</center></td>
                    <td><center>{{ $data -> waktu_booking }}</center></td>
                    <td><center>{{ $data -> lapangan }}</center></td>
                    <td><center>{{ $data -> selesai }}</center></td>
                    <td><center>{{ $data -> No_BK }}</center></td>
                    <td><center>{{ $data -> status }}</center></td>
                    <td><center>{{ $data -> gmail }}</center></td>
                    <td><center>{{ $data -> get_member->nama_member }}</center></td>

                    <td align=center><center>
                      
                      <a class="btn btn-success" href="/Edit/{{ $data -> id_booking }}" >EDIT </a>

                      <a class="btn btn-success" href="/Hapus/{{ $data -> id_booking }}" >HAPUS </a>
                      </center>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <br/>
   Halaman : {{ $bkg->currentPage() }} <br/>
  Jumlah Data : {{ $bkg->total() }} <br/>
  Data Per Halaman : {{ $bkg->perPage() }} <br/>
 
 
  {{ $bkg->links() }}
</div>
</div>
</div>
</div>
          <!-- /.box -->
           <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
      <!-- /.container-fluid -->
@endsection