@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card mb-4 border-0" style="border-radius: 20px;">
    <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
        <h4>EDIT DATA faskes</h4>
    </div>

          <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4">
                <div class="card-body p-3">
                    <p class="text-sm">
                      Hi, I’m, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <table class="table table-sm align-rows-center mb-0" style="width: 40%">
                        <tr style="font-size: .9rem;">
                            <td><strong>NIP</strong></td>
                            <td>: <input type="text"></td>
                            
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Nama</strong></td>
                            <td>:</td>
                            {{-- <td>{{  }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Tempat, Tanggal Lahir</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->tmp_dosen }}, {{ date('d-m-Y', strtotime($item->tgl_dosen)) }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Jenis Kelamin</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->gender_dosen }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Alamat</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->alamat_dosen }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Agama</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->agama_dosen }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Program Studi</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->prodi_dosen }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>No. Hp</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->telp_dosen }}</td> --}}
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Email</strong></td>
                            <td>:</td>
                            {{-- <td>{{ $item->email_dosen }}</td> --}}
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <a href="{{ route('admin') }}" class="btn btn-success pull-left">
                    <i class="fa fa-arrow-left"></i>
                    </a>
                </div>
            </div>
          </div>
        </div>
        {{-- @endforeach --}}
      </div> 
    </div>
</div>


@endsection










