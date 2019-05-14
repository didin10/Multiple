<!DOCTYPE html>
<html lang="en">
<head>
   <title>Table MemBer Pengguna</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{ asset('DMP/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('DMP/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
  
  

  <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
    <div class="box-header">
      <center>
        <a href="/MemberBR/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah member Baru</a>
      </br>
      </br>
      
              <h2 class="box-title">Data Member <kbd> Futsal</kbd></h2>
            <br>
            <h5>Temukan Teman Sparingmu Disini</h5>
              
              
            </center>
            </div>
            <br>
        <div class="table100">
          <table>
            <thead>
              <tr class="table100-head">
          
                  <th>Nama Member</th>
                  <th>Alamat Member</th>
                  <th>Umur Member</th>
                  <th>No.hp Member</th>
                  <th>Tanggal Daftar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($memberku as $row)
                <tr>
      
            <td>{{ $row->nama_member }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->umur }}</td>
            <td>{{ $row->telfon }}</td>
            <td>{{ $row->tgl_daftar }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  

<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>