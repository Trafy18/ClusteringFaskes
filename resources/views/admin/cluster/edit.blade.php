@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card mb-4 border-0" style="border-radius: 20px;">
    <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
        <h4>Centroid</h4>
    </div>
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
          <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4">
                <div class="card-body p-3">
                    
                    <hr class="horizontal gray-light my-4">
                    @foreach($centroid as $c)
                    <form action="/admin/centroid/update" method="post" >
                        {{ csrf_field() }}
                    <table class="table table-sm align-rows-center mb-0" style="width: 40%">
                        <input type="hidden" name="id" value="{{ $c->id_centroid }}"> <br/>
                        <tr style="font-size: .9rem;">
                            <td><strong>Klaster</strong></td>
                            <td>: <input name="Klaster" type="text" value="{{ $c->Klaster }}"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Apotek</strong></td>
                            <td>: <input name="Apotek" type="number" value="{{ $c->Apotek }}"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Poliklinik</strong></td>
                            <td>: <input name="Poliklinik" type="number" value="{{ $c->Poliklinik }}"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Puskesmas</strong></td>
                            <td>: <input name="Puskesmas" type="number" value="{{ $c->Puskesmas }}"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Puskesmas Pembantu</strong></td>
                            <td>: <input name="PkmPembantu" type="number" value="{{ $c->Pkm_pembantu }}"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Rumah Sakit</strong></td>
                            <td>: <input name="RumahSakit" type="number" value="{{ $c->Rumah_sakit }}"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>RS Bersalin</strong></td>
                            <td>: <input name="RsBersalin" type="number" value="{{ $c->Rs_bersalin }}"></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn-primary">Simpan</button>
                </form>
                @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <a href="{{ route('centroid') }}" class="btn btn-success pull-left">
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










