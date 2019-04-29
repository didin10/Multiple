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
                  <th>Id Member</th>
                  <th>Nama Member</th>
                  <th>Alamat Member</th>
                  <th>Umur Member</th>
                  <th>No.hp Member</th>
                  <th>Tanggal Daftar</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($memberku as $row)
                  
                <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama_member }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->umur }}</td>
            <td>{{ $row->telfon }}</td>
            <td>{{ $row->tgl_daftar }}</td>
                  <td>
            <a href="/Members/edit/{{ $row
            ->id }}">Edit</a>
        |
        <a href="/Members/hapus/{{ $row->id }}">Hapus</a>
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