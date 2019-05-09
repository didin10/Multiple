@extends('Adminlfc.base2')
@section('content')
        <!-- Tabel Kategori -->
       <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Booking</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><center>ID BOoking</center></th>
                    <th><center>Tgl BOoking</center></th>
                    <th><center>Waktu BOoking</center></th>
                    <th><center>Lapangan</center></th>
                    <th><center>uang muka</center></th>
                    <th><center>Biaya BOoking</center></th>
                    <th><center>Status</center></th>
                    <th><center>Member</center></th>
                    <th><center>Opsi</center></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($bkg as $data)
                  <tr>
                    <td><center>{{ $data -> id_booking }}</center></td>
                    
                    <td><center>{{ $data -> tgl_booking }}</center></td>
                    <td><center>{{ $data -> waktu_booking }}</center></td>
                    <td><center>{{ $data -> lapangan }}</center></td>
                    <td><center>{{ $data -> uang_muka }}</center></td>
                    <td><center>{{ $data -> biaya_booking }}</center></td>
                    <td><center>{{ $data -> status }}</center></td>
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