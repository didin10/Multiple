@extends('Adminlfc.base2')
@section('content')

<section class="content">
      <div class="row">
        <div class="col-lg-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Event</h3>
              <a href="/Events/create"> + Tambah Pegawai Baru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id Event</th>
                  <th>Nama Event</th>
                  <th>Tanggal Event</th>
                  <th>Batas Umur</th>
                  <th>Keterangan</th>
                  <th>Organizer</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  
                  @foreach($even as $row)
                  
                <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama_event }}</td>
            <td>{{ $row->tgl_event }}</td>
            <td>{{ $row->batas_umur }}</td>
            <td>{{ $row->keterangan }}</td>
            <td>{{ $row->organizer }}</td>
                  <td>
            <a href="/Events/edit/{{ $row->id }}">Edit</a>
    |
    <a href="/Events/hapus/{{ $row->id }}">Hapus</a>
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