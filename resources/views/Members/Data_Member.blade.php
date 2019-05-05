@extends('Adminlfc.base2')
@section('content')

<section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Member</h3>
              <a href="/Members/create"> + Tambah member Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th><center>Id Member</center></th>
                  <th><center>Nama Member</center></th>
                  <th><center>Alamat Member</center></th>
                  <th><center>Umur Member</center></th>
                  <th><center>No.hp Member</center></th>
                  <th><center>Tanggal Daftar</center></th>
                  <th><center>Action</center></th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($memberku as $row)
                  
                <tr>
            <td><center>{{ $row->id }}</center></td>
            <td><center>{{ $row->nama_member }}</center></td>
            <td><center>{{ $row->alamat }}</center></td>
            <td><center>{{ $row->umur }}</center></td>
            <td><center>{{ $row->telfon }}</center></td>
            <td><center>{{ $row->tgl_daftar }}</center></td>
                  <td><center>
            <a class="btn btn-success" href="/Members/edit/{{ $row
            ->id }}">Edit</a>
        |
        <a class="btn btn-success" href="/Members/hapus/{{ $row->id }}">Hapus</a>
      </center>
      </td>
     </td>
   </tr>
   @endforeach
</tr>
            </div>
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
@endsection