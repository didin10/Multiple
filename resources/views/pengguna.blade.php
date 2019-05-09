@extends('pengguna.app')

@section('content')



<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang <kbd> Aplikasi Booking Lapangan Futsal</kbd></div>
                
                <div class="card-body">
                    @if (session('status'))
                <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                </div>
                    @endif

                    
                <ul class="list-unstyled">
                <li class="media">
                <img class="mr-3" src="{{ asset('img/fm.png') }}" alt="Generic placeholder image">
                <div class="media-body">
                <h5 class="mt-0 mb-1" ><font face="Comic Sans MS"><b> Member Aplikasi<b></h5>
                Daftarkan diri anda sebagai members Aplikasi Booking Futsal karena ada diskon Menarik disetiap Pekannya</font>
                <br>
                <a href="{{ url('/MemberBR') }}" class="btn btn-success" role="button">Daftar</a>
                </div>
                </li>


                <br>
                <ul class="list-unstyled">
                <li class="media">
                <img class="mr-3" src="{{ asset('img/bp.png') }}" alt="Generic placeholder image">
                <div class="media-body">
                <h5 class="mt-0 mb-1" ><font face="Comic Sans MS"><b> Fitur Booking<b></h5>
                Fitur ini menyediakan form untuk meboking suatu lapangan futsal </font>
                <br>
                <a href="{{ url('/TambahBookingP') }}" class="btn btn-success" role="button">Booking aja</a>
                </div>
                </li>

                <br>
                <ul class="list-unstyled">
                <li class="media">
                <img class="mr-3" src="{{ asset('img/sp.png') }}" alt="Generic placeholder image">
                <div class="media-body">
                <h5 class="mt-0 mb-1" ><font face="Comic Sans MS"><b> Fitur Saran<b></h5>
                Fitur Ini Berisi Tentang Apakah Anda Memiliki Saran Kepada Pihak Lamongan Futsal Center</font>
                <br>
                <a href="" class="btn btn-success" role="button">Kirim Saran</a>
                </div>
                </li>

                </div>
            </div>

        </div>

    </div>
</div>
<br>

<div class="card">
  <div class="card-header">
   <center> <kbd>Quotes</kbd></center>
  </div>
  <div class="card-body">
    <center>
    <blockquote class="blockquote mb-0">
      <p>Juntung Tinggi Sportivitas dan Selamat Bertanding</p>
      <footer class="blockquote-footer"> PT.Futsal Indonesia Raya <cite title="Source Title"></cite></footer>
    </blockquote>
    </center>
  </div>
</div>
<footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Futsal Center Lamongan
      </div>
    </footer>
@endsection
