@extends('Adminlfc.base2')
@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
      <div class="col-lg-6">
          <!-- general form elements -->
      <div class="box box-primary">
      <div class="box-header with-border">
      <h3 class="box-title">From</h3>
           

      <div class="form-group">
      
      <h2>Tambah Member Baru</h2><br/>
      
    
      <form method="post" action="{{url('Members')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama_member">Nama Members</label>
              <input type="text" class="form-control" name="nama_member"required="required">
        </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="alamat">Alamat Members</label>
              <input type="text" class="form-control" name="alamat"required="required">
        </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="umur">Usia</label>
              <input type="text" class="form-control" name="umur"required="required">
        </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="telfon">No.Telfon</label>
              <input type="text" class="form-control" name="telfon"required="required">
        </div>
        </div>
          
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="tgl_daftar">Tanggal Daftar</label>
              <input type="date" class="form-control" name="tgl_daftar"required="required">
        </div>
        </div>

        
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:80px">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </div>
      </form>
    </div> 
    </div>
    </div>
    </div>
    </div>
  </section>
          <!-- /.box -->
@endsection