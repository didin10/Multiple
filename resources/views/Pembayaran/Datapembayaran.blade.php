@extends('Adminlfc.base2')
@section('content')
        <!-- Tabel Kategori -->
       <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data pembayaran</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    
                    <th><center>No Boking</center></th>
                    <th><center>Jumlah Bayar</center></th>
                    <th><center>Status</center></th>
                    <th><center>keterangan</center></th>
                    <th><center>Kode Transaksi</center></th>
                    <th><center>Tanggal Bayar</center></th>
                    <th><center>Opsi</center></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($byr as $data)
                  <tr>
                    
                    
                    <td><center>{{ $data -> get_booking->No_BK }}</center></td>
                    <td><center>{{ $data -> jumlah }}</center></td>
                    <td><center>{{ $data -> status }}</center></td>
                    <td><center>{{ $data -> keterangan }}</center></td>
                    <td><center>{{ $data -> kode_transaksi }}</center></td>
                    <td><center>{{ $data -> tgl_bayar }}</center></td>
                    
                    

                    <td align=center><center>
                      
                      <a class="btn btn-success" href="/Editbayar/{{ $data -> id}}" >EDIT </a>

                      <a class="btn btn-success" href="/Hapusbayar/{{ $data -> id}}" >HAPUS </a>
                      <a class="btn btn-success" href="/cetakbayar/{{ $data -> id}}" >Cetak </a>
                      </center>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              <br/>
  Halaman : {{ $byr->currentPage() }} <br/>
  Jumlah Data : {{ $byr->total() }} <br/>
  Data Per Halaman : {{ $byr->perPage() }} <br/>
 
 
  {{ $byr->links() }}
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