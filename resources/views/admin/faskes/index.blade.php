@extends('admin.layouts.app')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 border-0" style="border-radius: 10px;">
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
            <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 10px;">
                <h4>Data Desa/Kelurahan yang Memiliki Fasilitas Kesehatan</h4>
                    {{-- <div>
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="messages">
                              @if (session('success'))
                                <div class="alert alert-success">
                                  {{ session('success') }}
                                </div>
                              @endif
                            </div> 
                            <div class="fields">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="import_csv" name="import_csv" accept=".csv">
                                    <label class="input-group-text" for="import_csv"></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Import CSV</button>
                        </form>
                    </div> --}}
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <div class="table-responsive p-4">
                <table class="table table-striped table-border align-items-center mb-0" id="example">
                    <thead class=" table-success">
                    <tr>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">No.</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Kota</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Apotek</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Poliklinik</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Puskesmas Pembantu</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Rumah Sakit</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">RS Bersalin</th>
                        <th class="text-center text-secondary text-s font-weight-bolder opacity-7">Edit </th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach ($faskes as $faskes)
                        <tr class="text-center font-sans">
                            <td scope="row">{{ $no++ }}</td>
                            <td>{{ $faskes -> Kota }}</td>
                            <td>{{ $faskes -> Apotek }}</td>
                            <td>{{ $faskes -> Poliklinik }}</td>
                            <td>{{ $faskes -> Puskesmas }}</td>
                            <td>{{ $faskes -> Pkm_pembantu }}</td>
                            <td>{{ $faskes -> Rumah_sakit }}</td>
                            <td>{{ $faskes -> Rs_bersalin }}</td>
                            <td>
                                <a href="/admin/datafasilitaskesehatan/edit/{{ $faskes->id_kota }}" class="btn link btn-sm btn-warning">
                                    <i class="bi bi-pencil-square text-light" style="font-size: .8rem;"></i>
                                </a>
                                <a href="/admin/datafasilitaskesehatan/delete/{{ $faskes->id_kota }}" class="btn btn-sm" style="background-color: #ea0606;">
                                    <i class="bi bi-trash3 text-light" style="font-size: .8rem;"></i>
                                </a>
                            </td>
                        @endforeach 
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/admin/datafasilitaskesehatan/tambah'"  >Tambah</button>
                <th colspan="8">
                    <a href="{{ route('export') }}" class="btn btn-success">Export CSV</a>
                </th>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection



