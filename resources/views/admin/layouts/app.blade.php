<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="{{ asset('landingpage/img/logs.jpg') }}" rel="icon">
  <title>K-MEANS | Clustering Fasilitas Kesehatan</title>

   <!--     Fonts and icons     -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> --}}
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"') }} rel="stylesheet">

  <!-- Nucleo Icons -->
  <link href="{{ asset('dashboard/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard/css/nucleo-svg.css')}} " rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src=" {{ asset('https://kit.fontawesome.com/42d5adcbca.js') }} " crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">
  
  <!-- Bootstrap Icons -->
  <link href="{{ asset('landingpage/vendor-lp/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href=" {{asset('dashboard/css/soft-ui-dashboard.css?v=1.0.6')}} " rel="stylesheet" />
  <link href="{{ asset('landingpage/vendor-lp/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/assets/css/portal.css') }}" id="theme-style" rel="stylesheet" >
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css') }}">
  
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>

<body class="g-sidenav-show bg-gray-100">
  @if(Auth::check())
  
  @include('admin.layouts.sidebar')
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- End Navbar -->
    
    @yield('content')
  </main>
  @endif
  
  <!--   Core JS Files   -->
  <script src="  {{asset('dashboard/js/core/popper.min.js')}} "></script>
  <script src="  {{asset('dashboard/js/core/bootstrap.min.js')}} "></script>
  <script src="  {{asset('dashboard/js/plugins/perfect-scrollbar.min.js')}} "></script>
  <script src="  {{asset('dashboard/js/plugins/smooth-scrollbar.min.js')}} "></script>
  <script src="  {{asset('../admin/js/plugins/chartjs.min.js')}} "></script>
  <script defer src=" {{ asset('front/assets/plugins/fontawesome/js/all.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <!-- Javascript -->          
  <script src="{{ asset('front/assets/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('front/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  
  
  
  
  <!-- Charts JS -->
  <script src="{{ asset('front/assets/plugins/chart.js/chart.min.js') }}"></script> 
  <script src="{{ asset('front/assets/js/charts-demo.js') }}"></script> 
  <script src="{{ asset('https://cdnjs.com/libraries/Chart.js') }}"  ></script>  
  <!-- Page Specific JS -->
  <script src="{{ asset('front/assets/js/app.js') }}"></script> 

  <!-- admin LTE-->
  <script src="{{asset('https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js')}}"></script>

  
  <!-- DataTables -->
  <script type="text/javascript" charset="utf8" src="{{ asset('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
  <script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js') }}"></script>
  <script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
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
  <!-- Github buttons -->
  {{-- <script async defer src=" {{asset('https://buttons.github.io/buttons.js')}} "></script> --}}
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  {{-- <script src="  {{asset('../admin/js/soft-ui-dashboard.min.js?v=1.0.6')}} "></script> --}}
</body>

</html>
