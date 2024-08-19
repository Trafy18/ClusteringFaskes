<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-primary-subtle" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" {{url('/admin')}}" style="color: rgba(67, 160, 70)">
      <img src="{{ asset ('landingpage/img/logs.jpg') }}" style="height:auto; width:auto;" alt="">
      <span class="ms-1 fs-3 fw-bold">K-MEANS</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      {{-- DASHBOARD --}}
      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin') ? 'active' : '' }}" href=" {{url('/admin')}} " >
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="bi bi-speedometer fs-6"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      {{-- DATA MASTER --}}
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data Master</h6>
      </li>
      {{-- DATA WILAYAH --}}
      <li class="nav-item">
        <a class="nav-link {{ Route::is('datawilayah') ? 'active' : '' }}" href="{{url('/admin/datawilayah')}} ">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="bi bi-person-lines-fill fs-6"></i>
          </div>
          <span class="nav-link-text ms-1">Data Wilayah</span>
        </a>
      </li>
      {{-- DATA FASKES--}}
      <li class="nav-item">
        <a class="nav-link {{ Route::is('datafaskes') ? 'active' : '' }}" href="{{url('/admin/datafasilitaskesehatan')}} ">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="bi bi-people-fill fs-6"></i>
          </div>
          <span class="nav-link-text ms-1">Data Fasilitas Kesehatan</span>
        </a>
      </li>
      {{-- CLUSTER --}}
      <li class="nav-item">
        <a class="nav-link {{ Route::is('centroid') ? 'active' : '' }} " href="{{url('/admin/centroid')}} ">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="bi bi-calendar-fill fs-6"></i>
          </div>
          <span class="nav-link-text ms-1">Centroid</span>
        </a>
      </li>
      {{-- PERHITUNGAN K-MEANS --}}
      {{-- <li class="nav-item">
        <a class="nav-link {{ Route::is('perhitungan') ? 'active' : '' }} " href="{{url('/admin/perhitungan')}} ">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-dark text-center me-2 d-flex align-items-center justify-content-center">
            <i class="bi bi-card-list fs-6"></i>
          </div>
          <span class="nav-link-text ms-1">Perhitungan</span>
        </a>
      </li> --}}
    </ul>
  </div>
</aside>

