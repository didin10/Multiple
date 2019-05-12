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
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><center><kbd>Member Kami</kbd></center></h3>
              
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="table-success">
                  
                 @foreach($memberku as $row)
  
    {{ csrf_field() }}
    
    
    <div class="room-box">
      <h1 class="text-primary"> Nama Member</h1>
      <p>{{ $row->nama_member }}</p>
    </div>
    <div class="room-box">
      <h1 class="text-primary"> Alamat Member</h1>
      <p>{{ $row->alamat }}</p>
    </div>
    <div class="room-box">
      <h1 class="text-primary"> umur Member</h1>
      <p>{{ $row->umur }}</p>
    </div>
    <div class="room-box">
      <h1 class="text-primary"> Telp Member</h1>
      <p>{{ $row->telfon }}</p>
    </div>
    <div class="room-box">
      <h1 class="text-primary"> Tanggal Daftar</h1>
      <p>{{ $row->tgl_daftar }}</p>
    </div>
    
  </form>
  @endforeach


</tr>
            </div>
 </tbody>
</table>
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
