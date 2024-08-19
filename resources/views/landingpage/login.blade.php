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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/login.css">

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
                    <li><a class="nav-link scrollto " href="{{ url('/data') }}">Data</a></li>
                    {{-- <li><a class="nav-link scrollto " href="{{ url('/about') }}">About</a></li> --}}
                    <li><a class="nav-link scrollto active" href="{{ url('/login') }}">Login</a></li>
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

    <div class="alert">
      @if(@session()->has('success'))
  
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif  

      @if(@session()->has('loginError'))

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    </div>

  
    <section id="login">
        <div class="form">
            <form action="/login" method="post">
              @csrf
              <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
              <input type="text" name="username" placeholder="&#xf007;  username" autofocus required class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"/>
              @error('email')
              <div class="alert alert-danger mt-4" role="alert">
                {{ $message }}
              </div>
              @enderror
              <input type="password" name="password" id="password" placeholder="&#xf023;  password" required/>
              <i class="fas fa-eye" onclick="show()"></i> 
              <br>
              <button type="submit">LOGIN</button>
              <p class="message"></p>
            </form>
        
            <form class="login-form">
              <button type="button" onclick="window.location.href='{{ url('/signup') }}'">SIGN UP</button>
            </form>
          </div>
        </div>
    </section>
    


    

    </body>
</html>
    <!-- Vendor-lp JS Files -->
    <script src="landingpage/vendor-lp/purecounter/purecounter_vanilla.js"></script>
    <script src="landingpage/vendor-lp/aos/aos.js"></script>
    <script src="landingpage/vendor-lp/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landingpage/vendor-lp/glightbox/js/glightbox.min.js"></script>
    <script src="landingpage/vendor-lp/swiper/swiper-bundle.min.js"></script>
    
  <script src="{{ asset('https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js') }}"></script>
    {{-- <script src="{{ asset('landingpage/vendor-lp/php-email-form/validate.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <script src="landingpage/js/landingpage.js"></script>
    <script> 
        function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };</script>