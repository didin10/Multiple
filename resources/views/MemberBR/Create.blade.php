<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Forms Member Baru </title>

    <!-- Icons font CSS-->
    <link href="{{ asset('MB/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('MB/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('MB/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('MB/vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('MB/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
  
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">

        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Form Member baru</h2>
                    <form method="post" action="{{url('MemberBR')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
                        <div class="input-group">
                            <label for="nama_member">Nama Members</label>
              <input type="text" class="form-control" name="nama_member">
                        </div>
                        <div class="input-group">
                        <label for="alamat">Alamat Members</label>
              <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="input-group">
                            <label for="umur">Usia</label>
              <input type="text" class="form-control" name="umur">
                        </div>
                        <div class="input-group">
                            <label for="telfon">No.Telfon</label>
              <input type="text" class="form-control" name="telfon">

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label for="tgl_daftar">Tanggal Daftar</label>
              <input type="date" class="form-control" name="tgl_daftar">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="MB/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="MB/vendor/select2/select2.min.js"></script>
    <script src="MB/vendor/datepicker/moment.min.js"></script>
    <script src="MB/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="MB/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
