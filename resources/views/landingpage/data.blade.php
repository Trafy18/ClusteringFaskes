<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>K-MEANS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landingpage/css/landingpagedata.css" rel="stylesheet">
    <link href="landingpage/vendor-lp/aos/aos.css" rel="stylesheet">
    <link href="landingpage/vendor-lp/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landingpage/vendor-lp/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="landingpage/vendor-lp/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="landingpage/vendor-lp/remixicon/remixicon.css" rel="stylesheet">
    <link href="landingpage/vendor-lp/swiper/swiper-bundle.min.css" rel="stylesheet">
    

    <style>

    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>

    <header id="header" class="fixed-top d-flex align-items-center header">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="{{ url('/') }}">
                        <img src="{{ asset('landingpage/img/logs.jpg') }}" style="height:2rem; width:auto;" alt="">
                        {{-- <i class="fas fa-graduation-cap"></i> --}}
                        <span> K-MEANS</span>
                    </a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="{{ url('/data') }}">Data</a></li>
                    {{-- <li><a class="nav-link scrollto " href="{{ url('/about') }}">About</a></li> --}}
                    <li><a class="nav-link scrollto" href="{{ url('/login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="hero">

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="10 30 150 28 " preserveAspectRatio="none">
          <defs>
              <path id="wave-path" d="M-100 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
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

    </section><!-- End Hero -->
    <main id="main">

      {{-- <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">K-MEANS</span>
          </a>

          <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link " >Home</a></li>
            <li class="nav-item"><a href="/data" class="nav-link" aria-current="page">Data</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/about" class="nav-link active">Login</a></li>
          </ul>
        </header>
      </div> --}}

      

      <div class="container">
        <div class="card flex-basis-auto">
          <div class="card-body">
            <h3>Data Fasilitas kesehatan</h3>
            <div class="">
            
            <form action="/faskes/cari" method="GET" class="form-inline flex-column ">
            <input type="text" class="form-control" name="cari" placeholder="Cari Data faskes..." >
            <input  class="btn btn-primary ml-3" type="submit" value="Search">
          </form>
        </div>
          
          <br/>
          <table class="table table-bordered table-responsive table-hover text-center" >
            <tr>
              <th class="table-primary">Kota</th>
              <th class="table-primary">Apotek</th>
              <th class="table-primary">Poliklinik</th>
              <th class="table-primary">Puskesmas</th>
              <th class="table-primary">Puskesmas Pembantu</th>
              <th class="table-primary">Rumah Sakit</th>
              <th class="table-primary">RS Bersalin</th>
            </tr>
            @foreach($faskes as $f)
            <tr>
              <td>{{ $f-> Kota }}</td>
              <td>{{ $f-> Apotek }}</td>
              <td>{{ $f-> Poliklinik }}</td>
              <td>{{ $f-> Puskesmas }}</td>
              <td>{{ $f-> Pkm_pembantu }}</td>
              <td>{{ $f-> Rumah_sakit }}</td>
              <td>{{ $f-> Rs_bersalin }}</td>
              {{-- <td>
                <a class="btn btn-warning btn-sm" href="/edit{{ $f->id }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/hapus{{ $f->id }}">Hapus</a>
              </td> --}}
            </tr>
            @endforeach
            </tr>
          </table>
          {{-- <a class="btn btn-primary btn-sm" href="/tambah">Tambahkan Data</a> --}}
          </div>
        </div>
      </div>


    </main>
    

    </body>
</html>
    <!-- Vendor-lp JS Files -->
    <script src="landingpage/vendor-lp/purecounter/purecounter_vanilla.js"></script>
    <script src="landingpage/vendor-lp/aos/aos.js"></script>
    <script src="landingpage/vendor-lp/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landingpage/vendor-lp/glightbox/js/glightbox.min.js"></script>
    <script src="landingpage/vendor-lp/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="{{ asset('landingpage/vendor-lp/php-email-form/validate.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <script src="landingpage/js/landingpage.js"></script>

      <!-- DataTables -->
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable({
        pagingType: 'numbers',
        info: false,
      });
      $('#table2').DataTable({
        pagingType: 'numbers',
        info: false,
      });
      $('#table3').DataTable({
        pagingType: 'numbers',
        info: false,
      });
      $('#table4').DataTable({
        pagingType: 'numbers',
        info: false,
      });
      $('#table5').DataTable({
        pagingType: 'numbers',
        info: false,
      });
      $('#table6').DataTable({
        pagingType: 'numbers',
        info: false,
      });
    });
  </script>