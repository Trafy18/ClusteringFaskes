@extends('admin.layouts.app')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 border-0" style="border-radius: 20px;">
            <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
                <h4>Centroid Cluster 1</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="">
                    <thead class="table-success">
                    <tr>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $index => $f)
                            @if($index >=0 && $index<3)
                                <tr class="text-center font-sans">
                                    {{-- <td scope="row">{{ $no++ }}</td> --}}
                                    <td>{{ $f -> Keterangan }}</td>
                                    <td>{{ $f -> Klaster }}</td>
                                    <td>{{ $f -> Apotek }}</td>
                                    <td>{{ $f -> Poliklinik }}</td>
                                    <td>{{ $f -> Puskesmas }}</td>
                                    <td>{{ $f -> Pkm_pembantu }}</td>
                                    <td>{{ $f -> Rumah_sakit }}</td>
                                    <td>{{ $f -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('mahasiswa.show',['id' => $row->id]) }}" class="btn btn-sm" style="background-color: #17c1e8;">
                                            <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        
                                    </td> --}}
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

{{-- Iterasi 2 --}}
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 border-0" style="border-radius: 20px;">
            <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
                <h4>Centroid Cluster 2</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="">
                    <thead class="table-success">
                    <tr>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $index => $f)
                            @if($index >=3 && $index<6)
                                <tr class="text-center font-sans">
                                    {{-- <td scope="row">{{ $no++ }}</td> --}}
                                    <td>{{ $f -> Keterangan }}</td>
                                    <td>{{ $f -> Klaster }}</td>
                                    <td>{{ $f -> Apotek }}</td>
                                    <td>{{ $f -> Poliklinik }}</td>
                                    <td>{{ $f -> Puskesmas }}</td>
                                    <td>{{ $f -> Pkm_pembantu }}</td>
                                    <td>{{ $f -> Rumah_sakit }}</td>
                                    <td>{{ $f -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('mahasiswa.show',['id' => $row->id]) }}" class="btn btn-sm" style="background-color: #17c1e8;">
                                            <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        
                                    </td> --}}
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
                <h4>Centroid Cluster 3</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="">
                    <thead class="table-success">
                    <tr>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $index => $f)
                            @if($index >=6 && $index<9)
                                <tr class="text-center font-sans">
                                    {{-- <td scope="row">{{ $no++ }}</td> --}}
                                    <td>{{ $f -> Keterangan }}</td>
                                    <td>{{ $f -> Klaster }}</td>
                                    <td>{{ $f -> Apotek }}</td>
                                    <td>{{ $f -> Poliklinik }}</td>
                                    <td>{{ $f -> Puskesmas }}</td>
                                    <td>{{ $f -> Pkm_pembantu }}</td>
                                    <td>{{ $f -> Rumah_sakit }}</td>
                                    <td>{{ $f -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('mahasiswa.show',['id' => $row->id]) }}" class="btn btn-sm" style="background-color: #17c1e8;">
                                            <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        
                                    </td> --}}
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
                <h4>Centroid Cluster 4</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="">
                    <thead class="table-success">
                    <tr>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $index => $f)
                            @if($index >=9 && $index<12)
                                <tr class="text-center font-sans">
                                    {{-- <td scope="row">{{ $no++ }}</td> --}}
                                    <td>{{ $f -> Keterangan }}</td>
                                    <td>{{ $f -> Klaster }}</td>
                                    <td>{{ $f -> Apotek }}</td>
                                    <td>{{ $f -> Poliklinik }}</td>
                                    <td>{{ $f -> Puskesmas }}</td>
                                    <td>{{ $f -> Pkm_pembantu }}</td>
                                    <td>{{ $f -> Rumah_sakit }}</td>
                                    <td>{{ $f -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('mahasiswa.show',['id' => $row->id]) }}" class="btn btn-sm" style="background-color: #17c1e8;">
                                            <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        
                                    </td> --}}
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
                <h4>Centroid Cluster 5</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="">
                    <thead class="table-success">
                    <tr>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $index => $f)
                            @if($index >=12 && $index<15)
                                <tr class="text-center font-sans">
                                    {{-- <td scope="row">{{ $no++ }}</td> --}}
                                    <td>{{ $f -> Keterangan }}</td>
                                    <td>{{ $f -> Klaster }}</td>
                                    <td>{{ $f -> Apotek }}</td>
                                    <td>{{ $f -> Poliklinik }}</td>
                                    <td>{{ $f -> Puskesmas }}</td>
                                    <td>{{ $f -> Pkm_pembantu }}</td>
                                    <td>{{ $f -> Rumah_sakit }}</td>
                                    <td>{{ $f -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('mahasiswa.show',['id' => $row->id]) }}" class="btn btn-sm" style="background-color: #17c1e8;">
                                            <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        
                                    </td> --}}
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
                <h4>Centroid Cluster 6</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="">
                    <thead class="table-success">
                    <tr>
                        {{-- <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Wilayah</th> --}}
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Iterasi</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Titik Pusat(Centroid)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $index => $f)
                            @if($index >=15 && $index<=18)
                                <tr class="text-center font-sans">
                                    {{-- <td scope="row">{{ $no++ }}</td> --}}
                                    <td>{{ $f -> Keterangan }}</td>
                                    <td>{{ $f -> Klaster }}</td>
                                    <td>{{ $f -> Apotek }}</td>
                                    <td>{{ $f -> Poliklinik }}</td>
                                    <td>{{ $f -> Puskesmas }}</td>
                                    <td>{{ $f -> Pkm_pembantu }}</td>
                                    <td>{{ $f -> Rumah_sakit }}</td>
                                    <td>{{ $f -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('mahasiswa.show',['id' => $row->id]) }}" class="btn btn-sm" style="background-color: #17c1e8;">
                                            <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        
                                    </td> --}}
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
@endsection
