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
                <h4>Data Wilayah</h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="example">
                    <thead class="table-info">
                    <tr>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">No.</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Kota</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Jumlah Kecamatan</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Jumlah Desa/Kelurahan</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Jumlah Indeks Kesehatan</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Jumlah Penduduk</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Luas Wilayah(km<sup>2</sup>)</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($wilayah as $w)
                        <tr class="text-center font-sans">
                            <td scope="row">{{ $no++ }}</td>
                            {{-- <td>{{ $w -> id_kota }}</td> --}}
                            <td>{{ $w -> Kota }}</td>
                            <td>{{ $w -> jml_kecamatan }}</td>
                            <td>{{ $w -> jml_desa_kelurahan }}</td>
                            <td>{{ $w -> indeks_kesehatan }}</td>
                            <td>{{ $w -> jml_penduduk }}</td>
                            <td>{{ $w -> luas_wilayah }}</td>
                            <td>
                                <a href="/admin/datawilayah/edit/{{ $w->id_kota }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                </a>
                                <a href="/admin/datawilayah/hapus/{{ $w->id_kota }}" class="btn btn-sm" style="background-color: #ea0606;">
                                    <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                </a>
                                {{-- <a href="" class="btn btn-sm" style="background-color: #17c1e8;">
                                    <i class="bi bi-eye text-light" style="font-size: .8rem;"></i>
                                </a> --}}
                            </td>
                        </tr> 
                        @endforeach 
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/admin/datawilayah/tambah'" >Tambah</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
