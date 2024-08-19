<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>K-MEANS</title>

    <link rel="canonical" href="{{ asset('https://getbootstrap.com/docs/5.3/examples/headers/') }}">

    

    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@docsearch/css@3') }}">
        <!-- Favicons -->
        <link href="{{ asset('landingpage/img/favicon.png') }}" rel="icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">
    
        <!-- Vendor-lp CSS Files -->
        <link href="{{ asset('landingpage/vendor-lp/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor-lp/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor-lp/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor-lp/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor-lp/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor-lp/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/vendor-lp/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Fontawesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
        <!-- Template Main CSS File -->
        <link href="{{ asset('landingpage/css/landingpage.css') }}" rel="stylesheet">

    <link href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
  <body>
        <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex align-items-center justify-content-between">

          <div class="logo">
              <h1><a href="{{ url('/') }}">
                      {{-- <img src="{{ asset('img/logo.png') }}" style="height:2.5rem; width:auto;" alt=""> --}}
                      <i class="fas fa-graduation-cap"></i>
                      <span> K-MEANS</span>
                  </a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
                  <li><a class="nav-link scrollto " href="{{ url('/data') }}">Data</a></li>
                  <li><a class="nav-link scrollto active" href="{{ url('/about') }}">About</a></li>
                  <li><a class="nav-link scrollto " href="{{ url('/login') }}">Login</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

      <div class="container">
          <div class="row justify-content-between">
              <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                  <div data-aos="zoom-out">
                      <h1>Clustering Fasilitas Kesehatan <span>Provinsi Jawa Barat</span></h1>
                      <h2>Clusterisasi Berdasarkan Jumlah Desa/Kelurahan yang Memiliki Fasilitas Kesehatan</h2>
                  </div>
              </div>
              <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                  <img src="{{ asset('landingpage/img/Illustration.png') }}" class="img-fluid animated" alt="">
              </div>
          </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
  </svg>

    {{-- <main>

      <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">K-MEANS</span>
          </a>

          <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link " >Home</a></li>
            <li class="nav-item"><a href="/data" class="nav-link " >Data</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/about" class="nav-link active" aria-current="page">Login</a></li>
          </ul>
        </header>
      </div>

    </main> --}}


    </body>
</html>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landingpage/vendor-lp/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('landingpage/vendor-lp/aos/aos.js') }}"></script>
<script src="{{ asset('landingpage/vendor-lp/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landingpage/vendor-lp/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landingpage/vendor-lp/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('landingpage/vendor-lp/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landingpage/js/landingpage.js') }}"></script>