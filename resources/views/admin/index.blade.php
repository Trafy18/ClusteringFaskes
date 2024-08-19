@extends('admin.layouts.app')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-4 mb-xl-3  ">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Apotek</p>
                <h5 class="font-weight-bolder mb-0">
                  2085
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="bi bi-capsule"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-xl-3">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Poliklinik</p>
                <h5 class="font-weight-bolder mb-0">
                  1772
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="bi bi-prescription2"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-xl-3">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Puskesmas</p>
                <h5 class="font-weight-bolder mb-0">
                  1105
                  <span class="text-danger text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-xl-3">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Puskesmas Pembantu</p>
                <h5 class="font-weight-bolder mb-0">
                  1609
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="bi bi-file-medical"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4  mb-xl-3">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Rumah Sakit</p>
                <h5 class="font-weight-bolder mb-0">
                  312
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="bi bi-hospital"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

      
  <div class="col-md-4  mb-xl-3">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="count-box">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Rumah Sakit</p>
              <span data-purecounter-start="0" data-purecounter-end="1609" data-purecounter-duration="1"
              class="purecounter"></span>
              <h5 class="font-weight-bolder mb-0">
                53
                <span class="text-success text-sm font-weight-bolder"></span>
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="bi bi-hospital-fill"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container">
  <h1>Data Faskes</h1>
  <canvas id="salesChart" width="200" height="50"></canvas>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      var ctx = document.getElementById('salesChart').getContext('2d');
      var chartData = @json($chartData);
      
      new Chart(ctx, {
          type: 'bar', // Tipe chart, bisa 'line', 'bar', dll
          data: chartData,
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });
  });
</script>


                
  

</div>
@endsection
