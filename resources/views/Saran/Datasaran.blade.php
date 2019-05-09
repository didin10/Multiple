@extends('Adminlfc.base2')
@section('content')

<section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Saran</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th><center>Id</center></th>
                  <th><center>Nama </center></th>
                  <th><center>Email</center></th>
                  <th><center>Comment</center></th>
                  <th><center>Action</center></th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach($saranku as $row)
                  
                <tr>
            <td><center>{{ $row->id_saran }}</center></td>
            <td><center>{{ $row->nama }}</center></td>
            <td><center>{{ $row->email }}</center></td>
            <td><center>{{ $row->comment }}</center></td>
            
                  <td><center>
            
        
        <a class="btn btn-success" href="/Hapus/{{ $row->id_saran }}">Hapus</a>
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