@extends('Adminlfc.base2')
@section('content')

<section class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Member</h3>
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
            <a href="{{ action('EventController@edit',['id'=>$row->id]) }}" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
      <form action="{{ action('EventController@destroy',['id'=>$row->id]) }}" method="POST">
       {{ csrf_field() }}
       {{ method_field('DELETE') }}
       <button class="btn btn-xs btn-danger" type="submit">
        <i class="glyphicon glyphicon-trash"></i>
       </button>   
      </form> 
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