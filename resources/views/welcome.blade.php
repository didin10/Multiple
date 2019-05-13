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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="img/icon.png">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    </head>
    <body id="page-top">

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <img src="/img/iya.png">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/tampilan_event') }}">Event</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Deskripsi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
            </li>
             
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">LAMONGAN FUTSAL CENTER</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5"></h2>
          <div class="flex-center position-ref full-height">
          
            
                <div class="top-right links">
            @if (Route::has('login'))        
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-success" role="button" >Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success" role="button">Login</a>

                        @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success" role="button">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
      </div>
    </header>

<!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Futsal is My Life</h2>
            <p class="text-white-50">Junjung tinggi Sportivitas
              <a href="">Lamongan-2019</a>. Berikan kemampuan terbaik & usaha terkerasmu dalam setiap pertandingan.</p>
          </div>
        </div>
        <img src="img/ipad.jpg" class="img-fluid" alt="">
      </div>
    </section>

    

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/f1.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Lapangan Futsal Vinyl</h4>
              <p class="text-black-50 mb-0">Lapangan futsal vinyl ini biasa disebut dengan rubber karena bahan dasarnya menyerupai karet yang permukaanya lembut.  Jenis lapangan futsal yang satu ini merupakan yang paling banyak disukai oleh penggemar olahraga futsal. Hal tersebut dikarenakan bahannya yang empuk sehingga membuat kita lebih mudah dalam melakukan aksi-aksi penyelamatan terlebih bagi mereka yang suka diving.</p> <kbd> Rp</kbd> 100.000
            </div>
          </div>
        </div>

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/f2.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Lapangan Futsal Parquette</h4>
              <p class="text-black-50 mb-0">Jenis Lapangan futsal ini lebih populer di daerah Eropa, Amerika Latin dan kurang begitu populer di Indonesia. Lapangan jenis ini sebenarnya sudah cukup lama digunakan dan biasanya dipakai di GOR (Gelanggang Olahraga). Beberapa lapangan basket juga banyak yang memakai bahan ini karena material lapangan ini sendiri terbuat dari kayu yang mampu memantulkan bola dengan baik. </p>
            <kbd> Rp</kbd> 110.000
            </div>
          </div>
        </div>

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/f3.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Lapangan Futsal Karpet Plastik</h4>
              <p class="text-black-50 mb-0">Lapangan jenis ini memiliki bahan dasar yang sama dengan jenis lapangan taraflex, yaitu polyethyle. Yang menjadi pembeda keduanya adalah lapangan futsal dengan jenis ini terdiri dari banyak lembaran yang bisa dibongkar pasang sehingga membuat lapangan ini memiliki nilai ekonomis yang tinggi karena mudah dipindah tempatkan serta memiliki daya tahan yang lama.</p>
            <kbd> Rp</kbd> 120.000
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/f4.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Lapangan Futsal Taraflex</h4>
                  <p class="mb-0 text-white-50">Jenis lapangan ini sekilas hampir sama dengan Parquette tetapi ini bahannya dari polyethylen atau biji plastik yang dipadatkan. Meskipun dari bahan plastik tetapi lapangan ini keset dan enak digunakan, sehingga tidak mudah terjatuh. Jenis lapangan ini juga sudah banyak sekali di Indonesia.</p>
                  <kbd> Rp. 130.000 </kbd>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/f5.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Lapangan Futsal Rumput Sintetis</h4>
                  <p class="mb-0 text-white-50">Rumput sintetis ini sebenarnya diperuntukkan untuk lapangan indoor soccer bukan untuk futsal. Jenis lapangan ini digunakan hanya untuk hiburan saja bukan untuk tujuan prestasi walaupun diantara kita mungkin pernah menemui kompetisi menggunakan lapangan rumput sintetis ini. </p>
                  <kbd> Rp.140.000 </kbd>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">Jl.Lamongan Raya No.199</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">achmadmujahidin10@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">WA 0821-4002-4877</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
     <a class="navbar-brand js-scroll-trigger" href="{{ url('/admin/login') }}">Admin</a>
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
