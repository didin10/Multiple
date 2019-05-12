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
      
      <h2>Edit Event</h2><br/>
      
    
      @foreach($even as $row)
  <form action="/Events/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $row->id }}"> <br/>
    Nama Event <input type="text" required="required" name="nama_event" value="{{ $row->nama_event }}"> <br/>
    Tanggal Event <input type="date" required="required" name="tgl_event" value="{{ $row->tgl_event }}"> <br/>
    Batas Umur <input type="text" required="required" name="batas_umur" value="{{ $row->batas_umur }}"> <br/>
    Keterangan <input type="text" required="required" name="keterangan" value="{{ $row->keterangan }}"> <br/>
    Organizer <input type="text" required="required" name="organizer" value="{{ $row->organizer }}"> <br/>
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