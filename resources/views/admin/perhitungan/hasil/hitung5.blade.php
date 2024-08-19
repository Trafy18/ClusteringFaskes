@extends('admin.layouts.app')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12"> 
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ url('admin/hitung') }}">ITERASI1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('admin/hitung2') }}">ITERASI2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/admin/hitung3') }}">ITERASI3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/admin/hitung4') }}">ITERASI4</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " href="{{ url('/admin/hitung5') }}">ITERASI5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/admin/hitung6') }}">ITERASI6</a>
                </li>
              </ul>

        </div>

    </div>

</div>

{{-- centroid --}}
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 border-0" style="border-radius: 20px;">
            <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
                <h4>Centroid Iterasi 5</h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <div class="table-responsive p-4">
                    <table class="table table-striped table-border align-items-center mb-0" id="">
                        <thead class="table-success">
                        <tr>
                            {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th> --}}
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                            <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php $no= 1; @endphp
                            @foreach ($centroid as $index => $c)
                                @if($index >=12 && $index<15)
                                    <tr class="text-center font-sans">
                                        {{-- <td>{{ $c -> Keterangan }}</td> --}}
                                        <td>{{ $c -> Klaster }}</td>
                                        <td>{{ $c -> Apotek }}</td>
                                        <td>{{ $c -> Poliklinik }}</td>
                                        <td>{{ $c -> Puskesmas }}</td>
                                        <td>{{ $c -> Pkm_pembantu }}</td>
                                        <td>{{ $c -> Rumah_sakit }}</td>
                                        <td>{{ $c -> Rs_bersalin }}</td>
          
                                    </tr> 
                                @endif
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 border-0" style="border-radius: 20px;">
            <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
                <h4>Perhitungan Clustering K-Means</h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="example">
                    <thead>
                    <tr>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">No.</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">JarakC1</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">JarakC2</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">JarakC3</th>                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">C1</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">C2</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">C3</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Cluster Terdekat</th>

                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($hasil as $index => $h)
                            @if($index >=0 && $index<27)
                                <tr class="text-center font-sans">
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $h -> kota }}</td>
                                    <td>{{ $h -> jarak_c1 }}</td>
                                    <td>{{ $h -> jarak_c2 }}</td>
                                    <td>{{ $h -> jarak_c3 }}</td>
                                    <td>{{ $h -> C1 }}</td>
                                    <td>{{ $h -> C2 }}</td>
                                    <td>{{ $h -> C3 }}</td>
                                    <td>{{ $h -> cluster_terdekat }}</td>
                                </tr> 
                            @endif
                        @endforeach 
                    </tbody>

                </table>
                </div>
            </div>
            </div>
            <div class="container-fluid">
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = @json($pieChart); // Pastikan variabel diteruskan di sini
        
        new Chart(ctx, {
            type: 'pie', // Tipe chart diubah menjadi 'pie'
            data: pieChart,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'flex',
                    },
                    title: {
                        display: true,
                        text: 'Pie Chart Example'
                    }
                }
            }
        });
    });
</script>
@endsection
