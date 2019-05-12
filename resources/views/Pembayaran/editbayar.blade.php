
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
            Data Bayar</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
            @foreach ($bayar as $data)
              <form action="{{url('Updatebayar/'.$data->id)}}" method="post">
                  <tr>
                  {{ csrf_field() }}
                    <th>ID Bayar</th>
                    <th>Kode Booking</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Status</th>
                    <th>Keterangan </th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    
                    <th>Opsi</th>
                  </tr>
                  <tr>
                    <td>
                      <input type="hidden" name="id" value="{{ $data -> id }}">
                    </td>
                    <td>
                      <select name="bkg_id" class="form-control">
                        @foreach ($merubah as $m)
                            <option value="{{$m->id_booking}}">{{ $m->No_BK}}</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <input type="text" name="jumlah" value="{{ $data -> jumlah }}">
                    </td>
      
                    <td> 
                            <select name="status" class="form-control" value="{{ $data -> status }}" required="required">
                            <option >Proses</option>
                            <option >Jadi</option>
                            <option >Batal</option>
                            </select>
                            </td>
                   <th> 
                                <select name="keterangan" class="form-control" value="{{ $data -> keterangan }}" required="required">
                            <option >Segerah Melakukan Transaksi BNI 0865xxxx AT.LFC </option>
                            <option >Segerah Melakukan Transaksi BRI 0465xxxx AT.LFC</option>
                            <option >Segerah Melakukan Transaksi MANDIRI 01265xxxx AT.LFC</option>
                                </select>
                            </th>

                    <td>
                      <input type="text" name="kode_transaksi" value="{{ $data -> kode_transaksi }}">
                    </td>
                    <td>
                      <input type="date" name="tgl_bayar" value="{{ $data -> tgl_bayar }}">
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
