@extends('admin.layouts.app')
@section('content')
<div class="col-12">
    <div class="card mb-4 border-0" style="border-radius: 20px;">
    <div class="card-header border-0 pb-0" style="background-color: #fff; border-radius: 20px;">
        <h4>Tambah DATA WILAYAH</h4>
    </div>

          <div class="col-xl-7 col-sm-6 mb-xl-0 mb-4">
                <div class="card-body p-3">
                    
                    <hr class="horizontal gray-light my-4">
                    <form method="POST" action="/admin/datawilayah/tambah" >
                        {{ csrf_field() }}
                    <table class="table table-sm align-rows-center mb-0" style="width: 40%">
                        <input type="hidden" name="id" value=""> <br/>
                        <tr style="font-size: .9rem;">
                            <td><strong>Kota</strong></td>
                            <td>: <input name="Kota" type="text" value="" placeholder="Nama Kota"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Jumlah Kecamatan</strong></td>
                            <td>: <input name="JumlahKecamatan" type="text" value="" placeholder="5"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Jumlah Desa/Kelurahan</strong></td>
                            <td>: <input name="JumlahDesaKelurahan" type="text" value="" placeholder="5"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Indeks Kesehatan</strong></td>
                            <td>: <input name="IndeksKesehatan" type="text" value="" placeholder="79.46"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Jumlah Penduduk</strong></td>
                            <td>: <input name="JumlahPenduduk" type="text" value="" placeholder="5643838"></td>
                        </tr>
                        <tr style="font-size: .9rem;">
                            <td><strong>Luas Wilayah(km<sup>2</sup>)</strong></td>
                            <td>: <input name="LuasWilayah" type="text" value="" placeholder="2711"></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn-primary">Simpan</button>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <a href="{{ route('datawilayah') }}" class="btn btn-success pull-left">
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










