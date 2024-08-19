<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Perhitungan;

class PerhitunganController extends Controller
{
    public function index(){

        //     $faskeser = DB::table('faskes')
        //     // ->join('cluster', 'cluster.id_faskes', '=', 'faskes.id')
        //     ->select('faskes.Kota','faskes.Apotek','faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu', 'faskes.Rumah_sakit', 'faskes.Rs_bersalin')
        //     ->get();
        //     return view('perhitungan',compact('faskes'));

          // Data  pie chart
          $pieChart = [
            'labels' => ['Rendah', 'Sedang', 'Tinggi'],
            'datasets' => [
                [
                    'label' => 'Hasil Clustering',
                    'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                    'data' => [10, 12, 5],
                ],
            ],
        ];

        // Mengirim data ke view
        return view('admin.perhitungan.index',compact('pieChart'));
        
        
    }

    public function showData($table)
    {
        // Buat instance dari model umum dan tetapkan tabel yang diinginkan
        $model = new Perhitungan();
        $model->setTableName($table);

        // Ambil semua data dari tabel
        $data = $model->all();

        // Mengirim data ke view
        return view('admin.perhitungan.display-data', ['data' => $data, 'table' => $table]);
    }

    public function hasil(){
      
      // $jarak = DB::table('jarak')->get();
      $centroid = DB::table('centroid')->get();
      
      // $hasil = DB::table('hasil')
      // ->join('faskes', 'hasil.id_kota', '=', 'faskes.id_kota')
      // ->select('hasil.*', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
      // ->get();

      $pieChart = [
        'labels' => ['Rendah', 'Sedang', 'Tinggi'],
        'datasets' => [
            [
                'label' => 'Hasil Clustering',
                'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                'data' => [5, 21, 1],
            ],
        ],
    ];

      $hasil = DB::table('hasil')
      ->join('jarak', 'hasil.id_kota', '=', 'jarak.id_kota')
      ->select('hasil.*', 'jarak.jarak_c1', 'jarak.jarak_c2', 'jarak.jarak_c3')
      ->get();
        
        // return view('admin.perhitungan.hasil.hitung',['hasil'=> $hasil],['centroid'=>$centroid]);
        return view('admin.perhitungan.hasil.hitung', [
          'pieChart' => $pieChart,
          'hasil' => $hasil,
          'centroid' => $centroid,
      ]);
      
    }

    public function hasil2(){
      
      $centroid = DB::table('centroid')->get();
      // $hasil = DB::table('hasil2')
      // ->join('faskes', 'hasil2.id_kota', '=', 'faskes.id_kota')
      // ->select('hasil2.*', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
      // ->get();

      $hasil = DB::table('hasil2')
      ->join('jarak2', 'hasil2.id_kota', '=', 'jarak2.id_kota')
      ->select('hasil2.*', 'jarak2.jarak_c1', 'jarak2.jarak_c2', 'jarak2.jarak_c3')
      ->get();

      $pieChart = [
        'labels' => ['Rendah', 'Sedang', 'Tinggi'],
        'datasets' => [
            [
                'label' => 'Hasil Clustering',
                'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                'data' => [10, 16, 1],
            ],
        ],
    ];
        
    return view('admin.perhitungan.hasil.hitung2', [
      'pieChart' => $pieChart,
      'hasil' => $hasil,
      'centroid' => $centroid,
  ]);    
}

    public function hasil3(){
      
      $centroid = DB::table('centroid')->get();
      // $hasil = DB::table('hasil3')
      // ->join('faskes', 'hasil3.id_kota', '=', 'faskes.id_kota')
      // ->select('hasil3.*', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
      // ->get();

      $hasil = DB::table('hasil3')
      ->join('jarak3', 'hasil3.id_kota', '=', 'jarak3.id_kota')
      ->select('hasil3.*', 'jarak3.jarak_c1', 'jarak3.jarak_c2', 'jarak3.jarak_c3')
      ->get();
      
      $pieChart = [
        'labels' => ['Rendah', 'Sedang', 'Tinggi'],
        'datasets' => [
            [
                'label' => 'Hasil Clustering',
                'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                'data' => [10, 15, 2],
            ],
        ],
    ];
        
    return view('admin.perhitungan.hasil.hitung3', [
      'pieChart' => $pieChart,
      'hasil' => $hasil,
      'centroid' => $centroid,
  ]);  
    }

    public function hasil4(){
      
      $centroid = DB::table('centroid')->get();
      // $hasil = DB::table('hasil4')
      // ->join('faskes', 'hasil4.id_kota', '=', 'faskes.id_kota')
      // ->select('hasil4.*', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
      // ->get();

      $hasil = DB::table('hasil4')
      ->join('jarak4', 'hasil4.id_kota', '=', 'jarak4.id_kota')
      ->select('hasil4.*', 'jarak4.jarak_c1', 'jarak4.jarak_c2', 'jarak4.jarak_c3')
      ->get();
        
      $pieChart = [
        'labels' => ['Rendah', 'Sedang', 'Tinggi'],
        'datasets' => [
            [
                'label' => 'Hasil Clustering',
                'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                'data' => [10, 13, 4],
            ],
        ],
    ];
        
    return view('admin.perhitungan.hasil.hitung4', [
      'pieChart' => $pieChart,
      'hasil' => $hasil,
      'centroid' => $centroid,
  ]);          
    }

    public function hasil5(){
      
      $centroid = DB::table('centroid')->get();
      // $hasil = DB::table('hasil5')
      // ->join('faskes', 'hasil5.id_kota', '=', 'faskes.id_kota')
      // ->select('hasil5.*', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
      // ->get();
      
      $hasil = DB::table('hasil5')
      ->join('jarak5', 'hasil5.id_kota', '=', 'jarak5.id_kota')
      ->select('hasil5.*', 'jarak5.jarak_c1', 'jarak5.jarak_c2', 'jarak5.jarak_c3')
      ->get();
      $pieChart = [
        'labels' => ['Rendah', 'Sedang', 'Tinggi'],
        'datasets' => [
            [
                'label' => 'Hasil Clustering',
                'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                'data' => [10, 12, 5],
            ],
        ],
    ];
        
    return view('admin.perhitungan.hasil.hitung5', [
      'pieChart' => $pieChart,
      'hasil' => $hasil,
      'centroid' => $centroid,
  ]);          
    }

    public function hasil6(){
      
      $centroid = DB::table('centroid')->get();
      // $hasil = DB::table('hasil6')
      // ->join('faskes', 'hasil6.id_kota', '=', 'faskes.id_kota')
      // ->select('hasil6.*', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
      // ->get();

      $hasil = DB::table('hasil6')
      ->join('jarak6', 'hasil6.id_kota', '=', 'jarak6.id_kota')
      ->select('hasil6.*', 'jarak6.jarak_c1', 'jarak6.jarak_c2', 'jarak6.jarak_c3')
      ->get();
        
      $pieChart = [
        'labels' => ['Rendah', 'Sedang', 'Tinggi'],
        'datasets' => [
            [
                'label' => 'Hasil Clustering',
                'backgroundColor' => ['#b81830', '#f7c40a', '#32a852'],
                'data' => [10, 12, 5],
            ],
        ],
    ];
        
    return view('admin.perhitungan.hasil.hitung6', [
      'pieChart' => $pieChart,
      'hasil' => $hasil,
      'centroid' => $centroid,
  ]);         
    }

    public function getJoinedData()
    {
    $results = DB::table('hasil')
                ->join('faskes', 'hasil.id_kota', '=', 'faskes.id_kota')
                ->select('hasil.*', 'faskes.Kota', 'faskes.Apotek', 'faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu','faskes.Rumah_sakit','faskes.Rs_bersalin')
                ->get();

    return $results;
    }

    public function simpan_data_hasil (Request $request){
      $hasil = DB::create([
        'kota' =>$request->kota,
        'C1'=>$request->C1,
        'C2'=>$request->C2,
        'C3'=>$request->C2,
        'cluster_terdekat'=>$request->ClusterTerdekat,

      ]);
    }

    public function hitung(Request $request){
        $Kota = $request->Kota;
        $faskes = DB::table('centorid')->join('faskes', 'centroid.id_faskes', '=', 'faskes.id')
                    ->where('Kota','=',)
                    ->select('faskes.Kota','faskes.Apotek','faskes.Poliklinik', 'faskes.Puskesmas', 'faskes.Pkm_pembantu', 'faskes.Rumah_sakit', 'faskes.Rs_bersalin')
                    ->limit(3)->get();

        $faskes = DB::table('faskes')->get();
        $users = DB::table('pengisian_kuesioner')
            ->join('mahasiswa', 'pengisian_kuesioner.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
            ->where('mahasiswa.kelas','=',)
            ->select('mahasiswa.npm','mahasiswa.nama_mahasiswa','mahasiswa.kelas', 'pengisian_kuesioner.jumlahVisual', 'pengisian_kuesioner.jumlahAuditorial', 'pengisian_kuesioner.jumlahKinestetik')
            ->get();

        $hasil = DB::table('hasil')
            ->join('jarak', 'hasil.id_kota', '=', 'jarak.id_kota')
            ->select('hasil.Kota','jarak.Apotek','jarak.Poliklinik', 'jarak.Puskesmas', 'jarak.Pkm_pembantu', 'jarak.Rumah_sakit', 'faskes.Rs_bersalin')
            ->get();
        $i = 0;
        $t = 0;
        $n = 0;
        $no_iterasi = 1;
        $jml_apotek_c1 = 0;
        $jml_poliklinik_c1 = 0;
        $jml_puskesmas_c1 = 0;
        $jml_pkm_pembantu_c1 = 0;
        $jml_rumah_sakit_c1 = 0;
        $jml_rs_bersalin_c1 = 0;
        $jml_apotek_c2 = 0;
        $jml_poliklinik_c2 = 0;
        $jml_puskesmas_c2 = 0;
        $jml_pkm_pembantu_c2 = 0;
        $jml_rumah_sakit_c2 = 0;
        $jml_rs_bersalin_c2 = 0;
        $jml_apotek_c3 = 0;
        $jml_poliklinik_c3 = 0;
        $jml_puskesmas_c3 = 0;
        $jml_pkm_pembantu_c3 = 0;
        $jml_rumah_sakit_c3 = 0;
        $jml_rs_bersalin_c3 = 0;
 
        foreach($faskes as $faskes):
            $data_clust_apotek[$i] = $faskes->Apotek;
            $data_clust_poliklinik[$i] = $faskes->Poliklinik;
            $data_clust_puskesmas[$i] = $faskes->Puskesmas;
            $data_clust_pkm_pembantu[$i] = $faskes->Pkm_pembantu;
            $data_clust_rumah_sakit[$i] = $faskes->Rumah_sakit;
            $data_clust_rs_bersalin[$i] = $faskes->Rs_bersalin;
            $i++;
        endforeach;
        $lop = -1;
        
        foreach($faskes as $data):
            $lop += 1;
            $jarak[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[0]),2)+
                      pow(($data->Poliklinik-$data_clust_poliklinik[0]),2)+
                      pow(($data->Puskesmas-$data_clust_puskesmas[0]),2)+
                      pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[0]),2)+
                      pow(($data->Rumah_sakit-$data_clust_rumah_sakit[0]),2)+
                      pow(($data->Rs_bersalin-$data_clust_rs_bersalin[0]),2)
                    );
            $jarak1[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[1]),2)+
                      pow(($data->Poliklinik-$data_clust_poliklinik[1]),2)+
                      pow(($data->Puskesmas-$data_clust_puskesmas[1]),2)+
                      pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[1]),2)+
                      pow(($data->Rumah_sakit-$data_clust_rumah_sakit[1]),2)+
                      pow(($data->Rs_bersalin-$data_clust_rs_bersalin[1]),2)
                    );
            $jarak2[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[2]),2)+
                    pow(($data->Poliklinik-$data_clust_poliklinik[2]),2)+
                    pow(($data->Puskesmas-$data_clust_puskesmas[2]),2)+
                    pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[2]),2)+
                    pow(($data->Rumah_sakit-$data_clust_rumah_sakit[2]),2)+
                    pow(($data->Rs_bersalin-$data_clust_rs_bersalin[2]),2)
                );

                      if($jarak[$t] < $jarak1[$t] && $jarak[$t] < $jarak2[$t]){
                        $m_cluster[$t] = 1;
                      }
                      else if($jarak1[$t]< $jarak[$t] && $jarak1[$t]< $jarak2[$t]){
                        $m_cluster[$t] = 2;
                      }
                      else if($jarak2[$t]< $jarak[$t] && $jarak2[$t]< $jarak1[$t]){
                        $m_cluster[$t] = 3;
                      }

                      if($m_cluster[$n] == 1){
                        $n_apotek_c1[$n] = $data->Apotek;
                        $n_poliklinik_c1[$n] = $data->Poliklinik;
                        $n_puskesmas_c1[$n] = $data->Puskesmas;
                        $n_pkm_pembantu_c1[$n] = $data->Pkm_pembantu;
                        $n_rumah_sakit_c1[$n] = $data->Rumah_sakit;
                        $n_rs_bersalin_c1[$n] = $data->Rs_bersalin;
                        $n_apotek_c2[$n] = 0;
                        $n_poliklinik_c2[$n] = 0;
                        $n_puskesmas_c2[$n] = 0;
                        $n_pkm_pembantu_c2[$n] = 0;
                        $n_rumah_sakit_c2[$n] = 0;
                        $n_rs_bersalin_c2[$n] = 0;
                        $n_apotek_c3[$n] = 0;
                        $n_poliklinik_c3[$n] = 0;
                        $n_puskesmas_c3[$n] = 0;
                        $n_pkm_pembantu_c3[$n] = 0;
                        $n_rumah_sakit_c3[$n] = 0;
                        $n_rs_bersalin_c3[$n] = 0;
                        
                        // increment jumlah faskes
                        $jml_apotek_c1 += 1;
                        $jml_poliklinik_c1 += 1;
                        $jml_puskesmas_c1 += 1; 
                        $jml_pkm_pembantu_c1 += 1; 
                        $jml_rumah_sakit_c1 += 1; 
                        $jml_rs_bersalin_c1 += 1; 

                      }else if($m_cluster[$n] == 2){
                        $n_apotek_c2[$n] = $data->Apotek;
                        $n_poliklinik_c2[$n] = $data->Poliklinik;
                        $n_puskesmas_c2[$n] = $data->Puskesmas;
                        $n_pkm_pembantu_c2[$n] = $data->Pkm_pembantu;
                        $n_rumah_sakit_c2[$n] = $data->Rumah_sakit;
                        $n_rs_bersalin_c2[$n] = $data->Rs_bersalin;
                        $n_apotek_c1[$n] = 0;
                        $n_poliklinik_c1[$n] = 0;
                        $n_puskesmas_c1[$n] = 0;
                        $n_pkm_pembantu_c1[$n] = 0;
                        $n_rumah_sakit_c1[$n] = 0;
                        $n_rs_bersalin_c1[$n] = 0;
                        $n_apotek_c3[$n] = 0;
                        $n_poliklinik_c3[$n] = 0;
                        $n_puskesmas_c3[$n] = 0;
                        $n_pkm_pembantu_c3[$n] = 0;
                        $n_rumah_sakit_c3[$n] = 0;
                        $n_rs_bersalin_c3[$n] = 0;

                        $jml_apotek_c2 += 1;
                        $jml_poliklinik_c2 += 1;
                        $jml_puskesmas_c2 += 1; 
                        $jml_pkm_pembantu_c2 += 1; 
                        $jml_rumah_sakit_c2 += 1; 
                        $jml_rs_bersalin_c2 += 1; 


                      }else if($m_cluster[$n] == 3){
                        $n_apotek_c3[$n] = $data->Apotek;
                        $n_poliklinik_c3[$n] = $data->Poliklinik;
                        $n_puskesmas_c3[$n] = $data->Puskesmas;
                        $n_pkm_pembantu_c3[$n] = $data->Pkm_pembantu;
                        $n_rumah_sakit_c3[$n] = $data->Rumah_sakit;
                        $n_rs_bersalin_c3[$n] = $data->Rs_bersalin;
                        $n_apotek_c1[$n] = 0;
                        $n_poliklinik_c1[$n] = 0;
                        $n_puskesmas_c1[$n] = 0;
                        $n_pkm_pembantu_c1[$n] = 0;
                        $n_rumah_sakit_c1[$n] = 0;
                        $n_rs_bersalin_c1[$n] = 0;
                        $n_apotek_c2[$n] = 0;
                        $n_poliklinik_c2[$n] = 0;
                        $n_puskesmas_c2[$n] = 0;
                        $n_pkm_pembantu_c2[$n] = 0;
                        $n_rumah_sakit_c2[$n] = 0;
                        $n_rs_bersalin_c2[$n] = 0;

                        $jml_apotek_c3 += 1;
                        $jml_poliklinik_c3 += 1;
                        $jml_puskesmas_c3 += 1; 
                        $jml_pkm_pembantu_c3 += 1; 
                        $jml_rumah_sakit_c3 += 1; 
                        $jml_rs_bersalin_c3 += 1; 
                    }
            $n++;
            $t++;
        endforeach;

            $n_data_apotek_cc1 = 0;
            $n_data_poliklinik_cc1 = 0;
            $n_data_puskesmas_cc1 = 0;
            $n_data_pkm_pembantu_cc1 = 0;
            $n_data_rumah_sakit_cc1 = 0;
            $n_data_rs_bersalin_cc1 = 0;
            $n_data_apotek_cc2 = 0;
            $n_data_poliklinik_cc2 = 0;
            $n_data_puskesmas_cc2 = 0;
            $n_data_pkm_pembantu_cc2 = 0;
            $n_data_rumah_sakit_cc2 = 0;
            $n_data_rs_bersalin_cc2 = 0;
            $n_data_apotek_cc3 = 0;
            $n_data_poliklinik_cc3 = 0;
            $n_data_puskesmas_cc3 = 0;
            $n_data_pkm_pembantu_cc3 = 0;
            $n_data_rumah_sakit_cc3 = 0;
            $n_data_rs_bersalin_cc3 = 0;

            for($no_1 = 0; $no_1 <= $lop; $no_1++){
                $n_data_apotek_cc1 += $n_apotek_c1[$no_1];
                $n_data_poliklinik_cc1 += $n_poliklinik_c1[$no_1];
                $n_data_puskesmas_cc1 += $n_puskesmas_c1[$no_1]; 
                $n_data_pkm_pembantu_cc1 += $n_pkm_pembantu_c1[$no_1];
                $n_data_rumah_sakit_cc1 += $n_rumah_sakit_c1[$no_1];
                $n_data_rs_bersalin_cc1 += $n_rs_bersalin_c1[$no_1];
                $n_data_apotek_cc2 += $n_apotek_c2[$no_1];
                $n_data_poliklinik_cc2 += $n_poliklinik_c2[$no_1];
                $n_data_puskesmas_cc2 += $n_puskesmas_c2[$no_1]; 
                $n_data_pkm_pembantu_cc2 += $n_pkm_pembantu_c2[$no_1];
                $n_data_rumah_sakit_cc2 += $n_rumah_sakit_c2[$no_1];
                $n_data_rs_bersalin_cc2 += $n_rs_bersalin_c2[$no_1];
                $n_data_apotek_cc3 += $n_apotek_c3[$no_1];
                $n_data_poliklinik_cc3 += $n_poliklinik_c3[$no_1];
                $n_data_puskesmas_cc3 += $n_puskesmas_c2[$no_1]; 
                $n_data_pkm_pembantu_cc2 += $n_pkm_pembantu_c3[$no_1];
                $n_data_rumah_sakit_cc3 += $n_rumah_sakit_c3[$no_1];
                $n_data_rs_bersalin_cc3 += $n_rs_bersalin_c3[$no_1];

                }

                $centro_apotek[0] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2);
                $centro_poliklinik[0] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);
                $centro_puskesmas[0] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2);
                $centro_pkm_pembantu[0] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2);
                $centro_rumah_sakit[0] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2);
                $centro_rs_bersalin[0] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2);
                $centro_apotek[1] = number_format($n_data_apotek_cc2/$jml_apotek_c2,2);
                $centro_poliklinik[1] = number_format ($n_data_poliklinik_cc2/$jml_poliklinik_c2,2);
                $centro_puskesmas[1] = number_format($n_data_puskesmas_cc2/$jml_puskesmas_c2,2);
                $centro_pkm_pembantu[1] = number_format($n_data_pkm_pembantu_cc2/$jml_pkm_pembantu_c2,2);
                $centro_rumah_sakit[1] = number_format($n_data_rumah_sakit_cc2/$jml_rumah_sakit_c2,2);
                $centro_rs_bersalin[1] = number_format($n_data_rs_bersalin_cc2/$jml_rs_bersalin_c2,2);
                $centro_apotek[2] = number_format($n_data_apotek_cc2/$jml_apotek_c2,2);
                $centro_poliklinik[2] = number_format ($n_data_poliklinik_cc2/$jml_poliklinik_c2,2);
                $centro_puskesmas[2] = number_format($n_data_puskesmas_cc2/$jml_puskesmas_c2,2);
                $centro_pkm_pembantu[2] = number_format($n_data_pkm_pembantu_cc2/$jml_pkm_pembantu_c2,2);
                $centro_rumah_sakit[2] = number_format($n_data_rumah_sakit_cc2/$jml_rumah_sakit_c2,2);
                $centro_rs_bersalin[2] = number_format($n_data_rs_bersalin_cc2/$jml_rs_bersalin_c2,2);
        $data_insert = array(
            array(
                'Apotek' => $centro_apotek[0],
                'Poliklinik'=>$centro_poliklinik[0],
                'Puskesmas'=>$centro_puskesmas[0],
                'Pkm_pembantu'=>$centro_pkm_pembantu[0],
                'Rumah_sakit'=>$centro_rumah_sakit[0],
                'Rs_bersalin'=>$centro_rs_bersalin[0],
            ),
            array(
                'Apotek'=>$centro_apotek[1],
                'Poliklinik'=>$centro_poliklinik[1],
                'Puskesmas'=>$centro_puskesmas[1],
                'Pkm_pembantu'=>$centro_pkm_pembantu[1],
                'Rumah_sakit'=>$centro_rumah_sakit[1],
                'Rs_bersalin'=>$centro_rs_bersalin[1],
            ),array(
                'Apotek'=>$centro_apotek[2],
                'Poliklinik'=>$centro_poliklinik[2],
                'Puskesmas'=>$centro_puskesmas[2],
                'Pkm_pembantu'=>$centro_pkm_pembantu[2],
                'Rumah_sakit'=>$centro_rumah_sakit[2],
                'Rs_bersalin'=>$centro_rs_bersalin[2],
            ),

        );
        $data_centroid_baru = DB::table('tmp_centroid')->get();
        $data_cluster_baru = DB::table('tmp_cluster')->get();
        DB::table('tmp_centroid')->truncate();
        DB::table('tmp_cluster')->truncate();
        return view('hitung', compact('cluster','data_centroid_baru','data_cluster_baru'));
    }
}
