@extends('admin.layouts.app')
@section('content')
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
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">C1</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">C2</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">C3</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Cluster Terdekat</th>

                    </tr>
                    </thead>
                    {{-- <tbody>
                        @php $no= 1; @endphp
                        @foreach ($hasil as $index => $h)
                            @if($index >=0 && $index<3)
                                <tr class="text-center font-sans">
                                    <td>{{ $h -> kota }}</td>
                                    <td>{{ $h -> C1 }}</td>
                                    <td>{{ $h -> C2 }}</td>
                                    <td>{{ $h -> C3 }}</td>
                                    <td>{{ $h -> cluster_terdekat }}</td>
                                </tr> 
                            @endif
                        @endforeach 
                    </tbody> --}}

                </table>
                {{-- <form action="{{url ('/admin/hitung') }}" method="post" style="position: relative">
                    @csrf
                    @method('')
                        <button type="submit" class="btn btn-success" >Hitung</button>
                </form> --}}
                <button class="btn btn-success" type="button" onclick="window.location.href='{{ url('/admin/hitung6') }}'" >Hitung</button>
                </div>
                <div class="container-fluid">
                    <div class="chart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
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
