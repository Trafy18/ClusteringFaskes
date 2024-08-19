<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //tampilan awal masuk dashboard
    public function  dashboard() {
        $chartData = [
            'labels' => ['Apotek', 'Poliklinik', 'Puskesmas', 'Puskesmas Pembantu', 'Rumah Sakit', 'RS Bersalin', ],
            'datasets' => [
                [
                    'label' => ['Fasilitas Kesehatan'],
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'data' => [2085, 1772, 1105, 1609, 312, 53],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 205, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        // 'rgba(201, 203, 207, 0.2)'
                ],
                ],
            ],
        ];
        return view('admin.index',compact('chartData'));
    }

    //menampilkan datafasilitas kesehatan
    public function data_faskes(){
        $faskes = DB::table('faskes')->get();
        
        return view('admin.faskes.index',['faskes'=> $faskes]);
    }

    public function data_wilayah(){
        $wilayah= DB::table('wilayah')->get();
        return view('admin.wilayah.index',['wilayah'=> $wilayah]);
    }

    public function data_cluster(){
        $data = DB::table('centroid')->get();
        return view('admin.cluster.index',['faskes'=> $data]);
    }


    public function simpan_data_faskes(Request $request){
        $faskes = Faskes::create([
            'id' =>$request->id,
            'Kota'=>$request->Kota,
            'Apotek'=>$request->Apotek,
            'Poliklinik'=>$request->Poliklinik,
            'Puskesmas'=>$request->Puskesmas,
            'Pkm_pembantu'=>$request->PkmPembantu,
            'Rumah_sakit'=>$request->RumahSakit,
            'Rs_bersalin'=>$request->RsBersalin,
        ]);
        return redirect('admin.faskes.index');
    }
    public function simpan_data_wilayah(Request $request){
        $wilayah = Wilayah::create([
            'id_kota' =>$request->id,
            'Kota'=>$request->Kota,
            'jml_kecamatan'=>$request->JumlahKecamatan,
            'jml_desa/kelurahan'=>$request->JumlahDesaKelurahan,
            'indeks_kesehatan'=>$request->IndeksKesehatan,
            'jumlah_penduduk'=>$request->JumlahPenduduk,
            'luas_wilayah'=>$request->LuasWilayah,
            // 'Apotek'=>$request->Apotek,
            // 'Poliklinik'=>$request->Poliklinik,
            // 'Puskesmas'=>$request->Puskesmas,
            // 'Pkm_pembantu'=>$request->PkmPembantu,
            // 'Rumah_sakit'=>$request->RumahSakit,
            // 'Rs_bersalin'=>$request->RsBersalin,
            // 'total_faskes'=>$request->TotalFaskes,
        ]);
        return redirect('admin.wilayah.index');
    }
    public function simpan_data_cluster(Request $request){
        $faskes = Faskes::create([
            'centroid'=>$request->Cluster,
            'Apotek'=>$request->Apotek,
            'Poliklinik'=>$request->Poliklinik,
            'Puskesmas'=>$request->Puskesmas,
            'Pkm_pembantu'=>$request->PkmPembantu,
            'Rumah_sakit'=>$request->RumahSakit,
            'Rs_bersalin'=>$request->RsBersalin,
            'Keterangan'=>$request->Keterangan,
        ]);
        return redirect('admin.cluster.index');
    }

    
}
