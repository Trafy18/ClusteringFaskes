@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card mb-4 border-0" style="border-radius: 20px;">
    <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
        <h4>EDIT DATA FASKES</h4>
    </div>

          <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4">
                <div class="card-body p-3">
                    
                    <hr class="horizontal gray-light my-4">
                    <form method="post" action="/admin/datafasilitaskesehatan/simpan" >
                        {{ csrf_field() }}
                    <table class="table table-sm align-rows-center mb-0" style="width: 40%">
                        <input type="hidden" name="id" value=""> <br/>
                        <tr style="font-size: .9rem;">
                            <td><strong>Kota</strong></td>
                            <td>: <input name="Kota" type="text" placeholder="Nama Kota"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Apotek</strong></td>
                            <td>: <input name="Apotek" type="text" placeholder="Jumlah Apotek"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Poliklinik</strong></td>
                            <td>: <input name="Poliklinik" type="text" placeholder="Jumlah Poliklinik"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Puskesmas</strong></td>
                            <td>: <input name="Puskesmas" type="text" placeholder="Jumlah Puskesmas"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Puskesmas Pembantu</strong></td>
                            <td>: <input name="PkmPembantu" type="text" placeholder="Jumlah Pkm Pembantu"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Rumah Sakit</strong></td>
                            <td>: <input name="RumahSakit" type="text" placeholder="Jumlah Rumah Sakit"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>RS Bersalin</strong></td>
                            <td>: <input name="RsBersalin" type="text" placeholder="Jumlah RS Bersalin"></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn-primary">Simpan</button>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <a href="{{ route('datafaskes') }}" class="btn btn-success pull-left">
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










