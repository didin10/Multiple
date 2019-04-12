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
      
      <h2>Tambah Event Baru</h2><br/>
      
    
      <form method="post" action="{{url('Events')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="id">Id Event </label>
            <input type="text" class="form-control" name="id">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="nama_event">Nama Event</label>
              <input type="text" class="form-control" name="nama_event">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="tgl_event">Tanggal Events</label>
              <input type="date" class="form-control" name="tgl_event">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="batas_umur">Batas Umur</label>
              <input type="text" class="form-control" name="batas_umur">
            </div>
        </div>
          
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" name="keterangan">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="organizer">Organizer</label>
              <input type="text" class="form-control" name="organizer">
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