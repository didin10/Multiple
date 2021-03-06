<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Tabel Booking</li>
        </ol>
        <!-- End Breadcrumbs-->

        

      <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

        <title>App_Futsal</title>

        <!-- Fonts -->
          <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="shortcut icon" href="img/icon.png">
    <!-- Custom fonts for this template -->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/grayscale.min.css')}}" rel="stylesheet">

    </head>
    <body id="page-top">

        <!-- Navigation -->
    

    <!-- Header -->
    


    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">
      <div class="row">
        <div class="col-lg-12">
          
          <!-- Tabel Kategori -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data booking</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
            @foreach ($booking as $data)
              <form action="{{url('Update/'.$data->id_booking)}}" method="post">
                  <tr>
                  {{ csrf_field() }}
                    <th>ID Booking</th>
                    <th>Tanggal Booking</th>
                    <th>Jam Booking</th>
                    <th>Lapangan</th>
                    <th>Selesai </th>
                    <th>Nomor Booking</th>
                    <th>Status</th>
                    <th>Gmail</th>
                    <th>Member</th>
                    <th>Opsi</th>
                  </tr>
                  <tr>
                    <td>
                      <input type="hidden" name="id_booking" value="{{ $data -> id_booking }}">
                    </td>
                    <td>
                      <input type="date" name="tgl_booking" value="{{ $data -> tgl_booking }}">
                    </td>
                    <td>
                      <input type="time" name="waktu_booking" value="{{ $data -> waktu_booking }}">
                    </td>
                    <td>
                      <input type="text" name="lapangan" value="{{ $data -> lapangan }}">
                    </td>
                    <td>
                      <input type="time" name="selesai" value="{{ $data -> selesai }}">
                    </td>
                    <td>
                      <input type="text" name="No_BK" value="{{ $data -> No_BK }}">
                    </td>
                    <td>
                      <input type="text" name="status" value="{{ $data -> status }}">
                    </td>
                    <td>
                      <input type="text" name="gmail" value="{{ $data -> gmail }}">
                    </td>
                    


                    <td>
                      <select name="member_id" class="form-control">
                        @foreach ($merubah as $m)
                            <option value="{{$m->id}}">{{ $m->nama_member}}</option>
                        @endforeach
                      </select>
                    </td>
               <td align=center>
                      <input class="btn btn-success" type="submit" value="Simpan Data">
                    </td>
                  </tr>
                @endforeach
                </tbody>
                </form>
              </table>
                    
          </div>
        </div>
      </div>
</div>
</div>
</div>
          <!-- /.box -->
           <!-- /.row -->
    </section>

       

   

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Futsal Center Lamongan
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>


  </body>

</html>
