@extends('admin.layouts.app')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 border-0" style="border-radius: 20px;">
                <div class="alert">
                    @if(@session()->has('success'))
                
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif  
              
                    @if(@session()->has('error'))
              
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                  </div>
            <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
                <h4>Centroid Awal</h4>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
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
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($centroid as $index => $c)
                            @if($index >=0 && $index<3)
                                <tr class="text-center font-sans">
                                    {{-- <td>{{ $c -> Keterangan }}</td> --}}
                                    <td>{{ $c -> Klaster }}</td>
                                    <td>{{ $c -> Apotek }}</td>
                                    <td>{{ $c -> Poliklinik }}</td>
                                    <td>{{ $c -> Puskesmas }}</td>
                                    <td>{{ $c -> Pkm_pembantu }}</td>
                                    <td>{{ $c -> Rumah_sakit }}</td>
                                    <td>{{ $c -> Rs_bersalin }}</td>
                                    <td>
                                        <a href="/admin/centroid/edit/{{ $c->id_centroid }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                        </a>
                                        {{-- <a href="" class="btn btn-sm" style="background-color: #ea0606;">
                                            <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                        </a> --}}
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
            <button class="btn btn-success" type="button" onclick="window.location.href='{{ url('/admin/hitung') }}'" >Hitung</button>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
