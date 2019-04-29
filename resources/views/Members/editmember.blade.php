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
      
      <h2>Edit Member</h2><br/>
      
    
     @foreach($memberku as $row)
  <form action="/Members/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $row->id }}"> <br/>
    Nama Member <input type="text" required="required" name="nama_member" value="{{ $row->nama_member }}"> <br/>
    Alamat <input type="text" required="required" name="alamat" value="{{ $row->alamat }}"> <br/>
    Umur <input type="text" required="required" name="umur" value="{{ $row->umur }}"> <br/>
    Telfon <input type="text" required="required" name="telfon" value="{{ $row->telfon }}"> <br/>
    Tanggal Daftar <input type="date" required="required" name="tgl_daftar" value="{{ $row->tgl_daftar }}"> <br/>
    
    <input type="submit" value="Simpan Data">
  </form>
  @endforeach

    
    </div> 

          </div>
        </div>
      </div>
    </div>
  </section>
          <!-- /.box -->
@endsection