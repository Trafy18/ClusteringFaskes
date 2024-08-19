@extends('admin.layout.app')
@section('title','')
@section('content')
<div class="container">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">HASIL PERHITUNGAN <i>K-MEANS CLUSTERING</i> </h3>
          </div>
          <div class="card-body">
            //Centroid Iterasi1
            <div class="row">
            <div style="overflow-x:auto;" >
            <p> <b> Titik Pusat 1 Tiap <i>Cluster</i></b> </p>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="text-center">
              <th>Titik Pusat Awal</th>
              <th>Apotek</th>
              <th>Poliklinik</th>
              <th>Puskesmas</th>
              <th>Puskesmas Pembantu</th>
              <th>Rumah Sakit</th>
              <th>RS Bersalin</th>
              </tr>
              <tbody>

              <?php $no_cluster = 1;$i = 0;?>
              @foreach($cluster as $clust)
              <tr>
              <?php
                $data_clust_apotek[$i] = $clust->Apotek;
                $data_clust_poliklinik[$i] = $clust->Poliklinik;
                $data_clust_puskesmas[$i] = $clust->Puskesmas;
                $data_clust_pkm_pembantu[$i] = $clust->Pkm_pembantu;
                $data_clust_rumah_sakit[$i] = $clust->Rumah_sakit;
                $data_clust_rs_bersalin[$i] = $clust->Rs_bersalin;
                
              ?>
                <td><i>Cluster</i> {{$no_cluster++}}</td>
                <td>{{$centro_apotek[$i] = $clust->Apotek}}</td>
                <td>{{$centro_poliklinik[$i] = $clust->Poliklinik}}</td>
                <td>{{$centro_puskesmas[$i] = $clust->Puskesmas}}</td>
                <td>{{$centro_pkm_pembantu[$i] = $clust->Pkm_pembantu}}</td>
                <td>{{$centro_rumah_sakit[$i] = $clust->Rumah_sakit}}</td>
                <td>{{$centro_rs_bersalin[$i] = $clust->Rs_bersalin}}</td>
              </tr>
              <?php $i++;?>
              @endforeach
              </tbody>
            </thead>
            </table>

            //isi tabel setiap cluster pada iterasi 1
            <p> <b>Perhitungan Setiap Data Ke Setiap <i>Cluster</i> Iterasi 1</b> </p>
            <table id="example1" class="table table-bordered table-striped" >
              <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>Kota</th>
                  {{-- <th style="vertical-align: middle;" rowspan=2>Apotek</th>
                  <th style="vertical-align: middle;" rowspan=2>Poliklinik</th>
                  <th style="vertical-align: middle;" rowspan=2>Puskesmas</th>
                  <th style="vertical-align: middle;" rowspan=2>Puskesmas Pembantu</th>
                  <th style="vertical-align: middle;" rowspan=2>Rumah Sakit</th>
                  <th style="vertical-align: middle;" rowspan=2>RS Bersalin</th> --}}
                  <th colspan=6><i>Cluster Center</i> 1</th>
                  <th style="vertical-align: middle;" rowspan=2>jarak_data <i>Record</i> Ke CC-1</th>
                  <th colspan=6><i>Cluster Center</i> 2</th>   
                  <th style="vertical-align: middle;" rowspan=2>jarak_data <i>Record</i> Ke CC-2</th>
                  <th colspan=6><i>Cluster Center</i> 3</th> 
                  <th style="vertical-align: middle;" rowspan=2>jarak_data <i>Record</i> Ke CC-3</th> 
                  <th style="vertical-align: middle;" rowspan=2><i>Cluster</i></th> 
                    <tr>
                        <th>Apotek1</th>
                        <th>Poliklinik1</th>
                        <th>Puskesmas1</th>
                        <th>Puskesmas Pembantu1</th>
                        <th>Rumah Sakit1</th>
                        <th>RS Bersalin1</th>
                
                        <th>Apotek2</th>
                        <th>Poliklinik2</th>
                        <th>Puskesmas2</th>
                        <th>Puskesmas Pembantu2</th>
                        <th>Rumah Sakit2</th>
                        <th>RS Bersalin2</th>
                        
                        <th>Apotek3</th>
                        <th>Poliklinik3</th>
                        <th>Puskesmas3</th>
                        <th>Puskesmas Pembantu3</th>
                        <th>Rumah Sakit3</th>
                        <th>RS Bersalin3</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;$t=0;?>
              <?php $iterasi = 0;
                  ${'m_cluster'.$iterasi} = [];?>
                  //menampilkan isi data
              @foreach($faskes as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->Kota}}</td>
                  {{-- <td class="text-center">{{$data->Apotek}}</td>
                  <td class="text-center">{{$data->Poliklinik}}</td>
                  <td class="text-center">{{$data->Puskesmas}}</td>
                  <td class="text-center">{{$data->Pkm_pembantu}}</td>
                  <td class="text-center">{{$data->Rumah_sakit}}</td>
                  <td class="text-center">{{$data->Rs_bersalin}}</td> --}}
                  <td class="text-center">{{$data_clust_apotek[0]}}</td>
                  <td class="text-center">{{$data_clust_poliklinik[0]}}</td>
                  <td class="text-center">{{$data_clust_puskesmas[0]}}</td>
                  <td class="text-center">{{$data_clust_pkm_pembantu[0]}}</td>
                  <td class="text-center">{{$data_clust_rumah_sakit[0]}}</td>
                  <td class="text-center">{{$data_clust_rs_bersalin[0]}}</td>
                  <td class="text-center">
                    <?php
                      $jarak_data[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[0]),2)+
                      pow(($data->Poliklinik-$data_clust_poliklinik[0]),2)+
                      pow(($data->Puskesmas-$data_clust_puskesmas[0]),2)+
                      pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[0]),2)+
                      pow(($data->Rumah_sakit-$data_clust_rumah_sakit[0]),2)+
                      pow(($data->Rs_bersalin-$data_clust_rs_bersalin[0]),2)
                    );
                    ?>
                    {{number_format($jarak_data[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_apotek[1]}}</td>
                  <td class="text-center">{{$data_clust_poliklinik[1]}}</td>
                  <td class="text-center">{{$data_clust_puskesmas[1]}}</td>
                  <td class="text-center">{{$data_clust_pkm_pembantu[1]}}</td>
                  <td class="text-center">{{$data_clust_rumah_sakit[1]}}</td>
                  <td class="text-center">{{$data_clust_rs_bersalin[1]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak_data1[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[1]),2)+
                      pow(($data->Poliklinik-$data_clust_poliklinik[1]),2)+
                      pow(($data->Puskesmas-$data_clust_puskesmas[1]),2)+
                      pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[1]),2)+
                      pow(($data->Rumah_sakit-$data_clust_rumah_sakit[1]),2)+
                      pow(($data->Rs_bersalin-$data_clust_rs_bersalin[1]),2)
                    );
                    ?>
                    {{number_format($jarak_data1[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_apotek[2]}}</td>
                  <td class="text-center">{{$data_clust_poliklinik[2]}}</td>
                  <td class="text-center">{{$data_clust_puskesmas[2]}}</td>
                  <td class="text-center">{{$data_clust_pkm_pembantu[2]}}</td>
                  <td class="text-center">{{$data_clust_rumah_sakit[2]}}</td>
                  <td class="text-center">{{$data_clust_rs_bersalin[2]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak_data2[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[2]),2)+
                    pow(($data->Poliklinik-$data_clust_poliklinik[2]),2)+
                    pow(($data->Puskesmas-$data_clust_puskesmas[2]),2)+
                    pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[2]),2)+
                    pow(($data->Rumah_sakit-$data_clust_rumah_sakit[2]),2)+
                    pow(($data->Rs_bersalin-$data_clust_rs_bersalin[2]),2)
                )
                    ?>
                    {{number_format($jarak_data2[$t], 2)}}
                  </td>
                  <td class="text-center">
                    <?php
                      if($jarak_data[$t] < $jarak_data1[$t] && $jarak_data[$t] < $jarak_data2[$t]){
                        array_push(${'m_cluster'.$iterasi},1);
                        echo "1";
                      }
                      else if($jarak_data1[$t]< $jarak_data[$t] && $jarak_data1[$t]< $jarak_data2[$t]){
                        array_push(${'m_cluster'.$iterasi},2);
                        echo "2";
                      }
                      else if($jarak_data2[$t]< $jarak_data[$t] && $jarak_data2[$t]< $jarak_data1[$t]){
                        array_push(${'m_cluster'.$iterasi},3);
                        echo "3";
                      }
                    ?>
                  </td>
                </tr>
                <?php $t++;?>
                @endforeach
              </tbody>
            </table>
          <p> <b>Pengelompokan Data Dari Iterasi 1</b> </p>
          <table id="example1" class="table table-bordered table-striped" >
          <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>Kota</th>
                  <th colspan=6><i>Cluster</i> 1</th>
                  <th colspan=6><i>Cluster</i> 2</th>   
                  <th colspan=6><i>Cluster</i> 3</th> 
                    <tr class="text-center">
                        <th>Apotek</th>
                        <th>Poliklinik</th>
                        <th>Puskesmas</th>
                        <th>Puskesmas Pembantu</th>
                        <th>Rumah Sakit</th>
                        <th>RS Bersalin</th>

                        <th>Apotek</th>
                        <th>Poliklinik</th>
                        <th>Puskesmas</th>
                        <th>Puskesmas Pembantu</th>
                        <th>Rumah Sakit</th>
                        <th>RS Bersalin</th>

                        <th>Apotek</th>
                        <th>Poliklinik</th>
                        <th>Puskesmas</th>
                        <th>Puskesmas Pembantu</th>
                        <th>Rumah Sakit</th>
                        <th>RS Bersalin</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1; $n=0; $lop = -1;
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
              ?>
              <?php $n = 0;
              $nn = 0;?>
              @foreach($faskes as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->Kota}}</td>
                  <?php if(${'m_cluster'.$iterasi}[$nn] == 1){
                    echo '<td class="text-center">'.$data->Apotek.'</td>';
                    echo '<td class="text-center">'.$data->Poliklinik.'</td>';
                    echo '<td class="text-center">'.$data->Puskesmas.'</td>';
                    echo '<td class="text-center">'.$data->Pkm_pembantu.'</td>';
                    echo '<td class="text-center">'.$data->Rumah_sakit.'</td>';
                    echo '<td class="text-center">'.$data->Rs_bersalin.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';

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

                  }else if(${'m_cluster'.$iterasi}[$nn] == 2){
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->Apotek.'</td>';
                    echo '<td class="text-center">'.$data->Poliklinik.'</td>';
                    echo '<td class="text-center">'.$data->Puskesmas.'</td>';
                    echo '<td class="text-center">'.$data->Pkm_pembantu.'</td>';
                    echo '<td class="text-center">'.$data->Rumah_sakit.'</td>';
                    echo '<td class="text-center">'.$data->Rs_bersalin.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
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
                  
                  }else if(${'m_cluster'.$iterasi}[$nn]== 3){
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->Apotek.'</td>';
                    echo '<td class="text-center">'.$data->Poliklinik.'</td>';
                    echo '<td class="text-center">'.$data->Puskesmas.'</td>';
                    echo '<td class="text-center">'.$data->Pkm_pembantu.'</td>';
                    echo '<td class="text-center">'.$data->Rumah_sakit.'</td>';
                    echo '<td class="text-center">'.$data->Rs_bersalin.'</td>';
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
                  $lop += 1;
                  ?>
                  
                </tr>
                 
                @endforeach
                <tr class="text-center">
                <td colspan=2> <b>Jumlah</b></td>
                <?php
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
                ?>
                <td><b> {{$n_apotek_cc1}} </b></td>
                <td><b>{{$n_poliklinik_cc1}} </b></td>
                <td><b>{{$n_puskesmas_cc1}} </b></td>
                <td><b> {{$n_pkm_pembantu_cc1}} </b></td>
                <td><b>{{$n_rumah_sakit_cc1}} </b></td>
                <td><b>{{$n_rs_bersalin_cc1}} </b></td>
                <td><b> {{$n_apotek_cc2}} </b></td>
                <td><b>{{$n_poliklinik_cc2}} </b></td>
                <td><b>{{$n_puskesmas_cc2}} </b></td>
                <td><b> {{$n_pkm_pembantu_cc2}} </b></td>
                <td><b>{{$n_rumah_sakit_cc2}} </b></td>
                <td><b>{{$n_rs_bersalin_cc2}} </b></td>
                <td><b> {{$n_apotek_cc3}} </b></td>
                <td><b>{{$n_poliklinik_cc3}} </b></td>
                <td><b>{{$n_puskesmas_cc3}} </b></td>
                <td><b> {{$n_pkm_pembantu_cc3}} </b></td>
                <td><b>{{$n_rumah_sakit_cc3}} </b></td>
                <td><b>{{$n_rs_bersalin_cc3}} </b></td>

                </tr>
                <tr class="text-center">
                <td colspan=2>Jumlah Data</td>
                <td>{{$jml_apotek_c1}}</td>
                <td>{{$jml_poliklinik_c1}}</td>
                <td>{{ $jml_puskesmas_c1}}</td>
                <td>{{ $jml_pkm_pemabantu_c1}}</td>
                <td>{{ $jml_rumah_sakit_c1}}</td>
                <td>{{ $jml_rs_bersalin_c1}}</td>
                <td>{{$jml_apotek_c2}}</td>
                <td>{{$jml_poliklinik_c2}}</td>
                <td>{{ $jml_puskesmas_c2}}</td>
                <td>{{ $jml_pkm_pemabantu_c2}}</td>
                <td>{{ $jml_rumah_sakit_c2}}</td>
                <td>{{ $jml_rs_bersalin_c2}}</td>
                <td>{{$jml_apotek_c3}}</td>
                <td>{{$jml_poliklinik_c3}}</td>
                <td>{{ $jml_puskesmas_c3}}</td>
                <td>{{ $jml_pkm_pemabantu_c3}}</td>
                <td>{{ $jml_rumah_sakit_c3}}</td>
                <td>{{ $jml_rs_bersalin_c3}}</td>
                </tr>
                <tr class="text-center">
                <td colspan=2> <i> Centroid </i> Baru</td>
                <td>{{$centro_apotek[0] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2)}}</td>
                <td>{{$centro_poliklinik[0] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);}}</td>
                <td>{{$centro_puskesmas[0] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2)}}</td>
                <td>{{$centro_pkm_pembantu[0] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2)}}</td>
                <td>{{$centro_rumah_sakit[0] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2)}}</td>
                <td>{{$centro_rs_bersalin[0] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2)}}</td>
                <td>{{$centro_apotek[1] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2)}}</td>
                <td>{{$centro_poliklinik[1] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);}}</td>
                <td>{{$centro_puskesmas[1] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2)}}</td>
                <td>{{$centro_pkm_pembantu[1] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2)}}</td>
                <td>{{$centro_rumah_sakit[1] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2)}}</td>
                <td>{{$centro_rs_bersalin[1] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2)}}</td>
                <td>{{$centro_apotek[2] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2)}}</td>
                <td>{{$centro_poliklinik[2] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);}}</td>
                <td>{{$centro_puskesmas[2] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2)}}</td>
                <td>{{$centro_pkm_pembantu[2] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2)}}</td>
                <td>{{$centro_rumah_sakit[2] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2)}}</td>
                <td>{{$centro_rs_bersalin[2] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2)}}</td>
                <td colspan=2> <i> Centroid </i> Baru</td>
                </tr>
              </tbody>
          </table>  
          </div>
        </div>
        <br>
<!-- Centroid Baru -->

        //iterasi 2
        <div class="row">
            <div style="overflow-x:auto;" >
            <p> <b> Titik Pusat 2 Tiap <i>Cluster</i></b> </p>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="text-center">
              <th>Titik Pusat Awal</th>
              <th>Apotek</th>
              <th>Poliklinik</th>
              <th>Puskesmas</th>
              <th>Puskesmas Pembantu</th>
              <th>Rumah Sakit</th>
              <th>RS Bersalin</th>
              </tr>
              <tbody>

              <?php $no_cluster = 1;$i = 0;?>
              @foreach($data_centroid_baru as $clust)
              <tr>
              <?php
                $data_clust_apotek[$i] = $clust->Apotek;
                $data_clust_poliklinik[$i] = $clust->Poliklinik;
                $data_clust_puskesmas[$i] = $clust->Puskesmas;
                $data_clust_pkm_pembantu[$i] = $clust->Pkm_pembantu;
                $data_clust_rumah_sakit[$i] = $clust->Rumah_sakit;
                $data_clust_rs_bersalin[$i] = $clust->Rs_bersalin
                
              ?>
                <td><i>Cluster</i> {{$no_cluster++}}</td>
                <td>{{$centro_apotek[$i] = $clust->Apotek}}</td>
                <td>{{$centro_poliklinik[$i] = $clust->Poliklinik}}</td>
                <td>{{$centro_puskesmas[$i] = $clust->Puskesmas}}</td>
                <td>{{$centro_pkm_pembantu[$i] = $clust->Pkm_pembantu}}</td>
                <td>{{$centro_rumah_sakit[$i] = $clust->Rumah_sakit}}</td>
                <td>{{$centro_rs_bersalin[$i] = $clust->Rs_bersalin}}</td>
              </tr>
              <?php $i++;?>
              @endforeach
              </tbody>
            </thead>
            //hasil perhitungan iterasi2
            </table>
            <p> <b>Perhitungan Setiap Data Ke Setiap <i>Cluster</i> Iterasi 2</b> </p>
            <table id="example1" class="table table-bordered table-striped" >
              <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>Kota/th>
                  {{-- <th style="vertical-align: middle;" rowspan=2>Apotek</th>
                  <th style="vertical-align: middle;" rowspan=2>Poliklinik</th>
                  <th style="vertical-align: middle;" rowspan=2>Puskesmas</th>
                  <th style="vertical-align: middle;" rowspan=2>Puskesmas Pembantu</th>
                  <th style="vertical-align: middle;" rowspan=2>Rumah Sakit</th>
                  <th style="vertical-align: middle;" rowspan=2>RS Bersalin</th> --}}
  
                  <th colspan=3><i>Cluster Center</i> 1</th>
                  <th style="vertical-align: middle;" rowspan=2>jarak_data <i>Record</i> Ke CC-1</th>
                  <th colspan=3><i>Cluster Center</i> 2</th>   
                  <th style="vertical-align: middle;" rowspan=2>jarak_data <i>Record</i> Ke CC-2</th>
                  <th colspan=3><i>Cluster Center</i> 3</th> 
                  <th style="vertical-align: middle;" rowspan=2>jarak_data <i>Record</i> Ke CC-3</th> 
                  <th style="vertical-align: middle;" rowspan=2><i>Cluster</i></th> 
                    <tr>
                      <th>Apotek1</th>
                      <th>Poliklinik1</th>
                      <th>Puskesmas1</th>
                      <th>Puskesmas Pembantu1</th>
                      <th>Rumah Sakit1</th>
                      <th>RS Bersalin1</th>
              
                      <th>Apotek2</th>
                      <th>Poliklinik2</th>
                      <th>Puskesmas2</th>
                      <th>Puskesmas Pembantu2</th>
                      <th>Rumah Sakit2</th>
                      <th>RS Bersalin2</th>
                      
                      <th>Apotek3</th>
                      <th>Poliklinik3</th>
                      <th>Puskesmas3</th>
                      <th>Puskesmas Pembantu3</th>
                      <th>Rumah Sakit3</th>
                      <th>RS Bersalin3</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;$t=0;?>
              @foreach($faskes as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->Kota}}</td>
                  {{-- <td class="text-center">{{$data->Apotek}}</td>
                  <td class="text-center">{{$data->Poliklinik}}</td>
                  <td class="text-center">{{$data->Puskesmas}}</td>
                  <td class="text-center">{{$data->Pkm_pembantu}}</td>
                  <td class="text-center">{{$data->Rumah_sakit}}</td>
                  <td class="text-center">{{$data->Rs_bersalin}}</td> --}}
                  <td class="text-center">{{$data_clust_apotek[0]}}</td>
                  <td class="text-center">{{$data_clust_poliklinik[0]}}</td>
                  <td class="text-center">{{$data_clust_puskesmas[0]}}</td>
                  <td class="text-center">{{$data_clust_pkm_pembantu[0]}}</td>
                  <td class="text-center">{{$data_clust_rumah_sakit[0]}}</td>
                  <td class="text-center">{{$data_clust_rs_bersalin[0]}}</td>
                  <td class="text-center">
                    <?php
                      $jarak_data[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[0]),2)+
                      pow(($data->Poliklinik-$data_clust_poliklinik[0]),2)+
                      pow(($data->Puskesmas-$data_clust_puskesmas[0]),2)+
                      pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[0]),2)+
                      pow(($data->Rumah_sakit-$data_clust_rumah_sakit[0]),2)+
                      pow(($data->Rs_bersalin-$data_clust_rs_bersalin[0]),2)
                    );
                    ?>
                    {{number_format($jarak_data[$t], 2)}}

                  </td>
                  <td class="text-center">{{$data_clust_apotek[1]}}</td>
                  <td class="text-center">{{$data_clust_poliklinik[1]}}</td>
                  <td class="text-center">{{$data_clust_puskesmas[1]}}</td>
                  <td class="text-center">{{$data_clust_pkm_pembantu[1]}}</td>
                  <td class="text-center">{{$data_clust_rumah_sakit[1]}}</td>
                  <td class="text-center">{{$data_clust_rs_bersalin[1]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak_data1[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[1]),2)+
                      pow(($data->Poliklinik-$data_clust_poliklinik[1]),2)+
                      pow(($data->Puskesmas-$data_clust_puskesmas[1]),2)+
                      pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[1]),2)+
                      pow(($data->Rumah_sakit-$data_clust_rumah_sakit[1]),2)+
                      pow(($data->Rs_bersalin-$data_clust_rs_bersalin[1]),2)
                    );
                    ?>
                    {{number_format($jarak_data1[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_apotek[2]}}</td>
                  <td class="text-center">{{$data_clust_poliklinik[2]}}</td>
                  <td class="text-center">{{$data_clust_puskesmas[2]}}</td>
                  <td class="text-center">{{$data_clust_pkm_pembantu[2]}}</td>
                  <td class="text-center">{{$data_clust_rumah_sakit[2]}}</td>
                  <td class="text-center">{{$data_clust_rs_bersalin[2]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak_data2[$t] = sqrt( pow(($data->Apotek-$data_clust_apotek[2]),2)+
                    pow(($data->Poliklinik-$data_clust_poliklinik[2]),2)+
                    pow(($data->Puskesmas-$data_clust_puskesmas[2]),2)+
                    pow(($data->Pkm_pembantu-$data_clust_pkm_pembantu[2]),2)+
                    pow(($data->Rumah_sakit-$data_clust_rumah_sakit[2]),2)+
                    pow(($data->Rs_bersalin-$data_clust_rs_bersalin[2]),2)
                )
                    ?>
                    {{number_format($jarak_data2[$t], 2)}}
                  </td>
                  <td class="text-center">
                    <?php
                      if($jarak_data[$t] < $jarak_data1[$t] && $jarak_data[$t] < $jarak_data2[$t]){
                        $m_cluster[$t] = 1;
                        echo "1";
                      }
                      else if($jarak_data1[$t]< $jarak_data[$t] && $jarak_data1[$t]< $jarak_data2[$t]){
                        $m_cluster[$t] = 2;
                        echo "2";
                      }
                      else if($jarak_data2[$t]< $jarak_data[$t] && $jarak_data2[$t]< $jarak_data1[$t]){
                        $m_cluster[$t] = 3;
                        echo "3";
                      }
                    ?>
                  </td>
                </tr>
                <?php $t++;?>
                @endforeach
              </tbody>
            </table>
          <p> <b>Pengelompokan Data Dari Iterasi 2</b> </p>
          <table id="example1" class="table table-bordered table-striped" >
          <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>Kota</th>
                  <th colspan=3><i>Cluster</i> 1</th>
                  <th colspan=3><i>Cluster</i> 2</th>   
                  <th colspan=3><i>Cluster</i> 3</th> 
                    <tr class="text-center">
                        <th>Apotek</th>
                        <th>Poliklinik</th>
                        <th>Puskesmas</th>
                        <th>Puskesmas Pembantu</th>
                        <th>Rumah Sakit</th>
                        <th>RS Bersalin</th>

                        <th>Apotek</th>
                        <th>Poliklinik</th>
                        <th>Puskesmas</th>
                        <th>Puskesmas Pembantu</th>
                        <th>Rumah Sakit</th>
                        <th>RS Bersalin</th>

                        <th>Apotek</th>
                        <th>Poliklinik</th>
                        <th>Puskesmas</th>
                        <th>Puskesmas Pembantu</th>
                        <th>Rumah Sakit</th>
                        <th>RS Bersalin</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1; $n=0; $lop = -1;
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
              ?>
              <?php $n = 0;
              $nn = 0;?>
              @foreach($faskes as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->Kota}}</td>
                  <?php if(${'m_cluster'.$iterasi}[$nn] == 1){
                    echo '<td class="text-center">'.$data->Apotek.'</td>';
                    echo '<td class="text-center">'.$data->Poliklinik.'</td>';
                    echo '<td class="text-center">'.$data->Puskesmas.'</td>';
                    echo '<td class="text-center">'.$data->Pkm_pembantu.'</td>';
                    echo '<td class="text-center">'.$data->Rumah_sakit.'</td>';
                    echo '<td class="text-center">'.$data->Rs_bersalin.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';

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

                  }else if(${'m_cluster'.$iterasi}[$nn] == 2){
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->Apotek.'</td>';
                    echo '<td class="text-center">'.$data->Poliklinik.'</td>';
                    echo '<td class="text-center">'.$data->Puskesmas.'</td>';
                    echo '<td class="text-center">'.$data->Pkm_pembantu.'</td>';
                    echo '<td class="text-center">'.$data->Rumah_sakit.'</td>';
                    echo '<td class="text-center">'.$data->Rs_bersalin.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
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
                  
                  }else if(${'m_cluster'.$iterasi}[$nn]== 3){
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->Apotek.'</td>';
                    echo '<td class="text-center">'.$data->Poliklinik.'</td>';
                    echo '<td class="text-center">'.$data->Puskesmas.'</td>';
                    echo '<td class="text-center">'.$data->Pkm_pembantu.'</td>';
                    echo '<td class="text-center">'.$data->Rumah_sakit.'</td>';
                    echo '<td class="text-center">'.$data->Rs_bersalin.'</td>';
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
                  $lop += 1;
                  ?>
                  
                </tr>
                 
                @endforeach
                <tr class="text-center">
                <td colspan=2> <b>Jumlah</b></td>
                <?php
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

                ?>
                <td><b> {{$n_apotek_cc1}} </b></td>
                <td><b>{{$n_poliklinik_cc1}} </b></td>
                <td><b>{{$n_puskesmas_cc1}} </b></td>
                <td><b> {{$n_pkm_pembantu_cc1}} </b></td>
                <td><b>{{$n_rumah_sakit_cc1}} </b></td>
                <td><b>{{$n_rs_bersalin_cc1}} </b></td>
                <td><b> {{$n_apotek_cc2}} </b></td>
                <td><b>{{$n_poliklinik_cc2}} </b></td>
                <td><b>{{$n_puskesmas_cc2}} </b></td>
                <td><b> {{$n_pkm_pembantu_cc2}} </b></td>
                <td><b>{{$n_rumah_sakit_cc2}} </b></td>
                <td><b>{{$n_rs_bersalin_cc2}} </b></td>
                <td><b> {{$n_apotek_cc3}} </b></td>
                <td><b>{{$n_poliklinik_cc3}} </b></td>
                <td><b>{{$n_puskesmas_cc3}} </b></td>
                <td><b> {{$n_pkm_pembantu_cc3}} </b></td>
                <td><b>{{$n_rumah_sakit_cc3}} </b></td>
                <td><b>{{$n_rs_bersalin_cc3}} </b></td>

                </tr>
                <tr class="text-center">
                <td colspan=2>Jumlah Data</td>
                <td>{{$jml_apotek_c1}}</td>
                <td>{{$jml_poliklinik_c1}}</td>
                <td>{{ $jml_puskesmas_c1}}</td>
                <td>{{ $jml_pkm_pemabantu_c1}}</td>
                <td>{{ $jml_rumah_sakit_c1}}</td>
                <td>{{ $jml_rs_bersalin_c1}}</td>
                <td>{{$jml_apotek_c2}}</td>
                <td>{{$jml_poliklinik_c2}}</td>
                <td>{{ $jml_puskesmas_c2}}</td>
                <td>{{ $jml_pkm_pemabantu_c2}}</td>
                <td>{{ $jml_rumah_sakit_c2}}</td>
                <td>{{ $jml_rs_bersalin_c2}}</td>
                <td>{{$jml_apotek_c3}}</td>
                <td>{{$jml_poliklinik_c3}}</td>
                <td>{{ $jml_puskesmas_c3}}</td>
                <td>{{ $jml_pkm_pemabantu_c3}}</td>
                <td>{{ $jml_rumah_sakit_c3}}</td>
                <td>{{ $jml_rs_bersalin_c3}}</td>
                </tr>
                <tr class="text-center">
                <td colspan=2> <i> Centroid </i> Baru</td>
                <td>{{$centro_apotek[0] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2)}}</td>
                <td>{{$centro_poliklinik[0] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);}}</td>
                <td>{{$centro_puskesmas[0] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2)}}</td>
                <td>{{$centro_pkm_pembantu[0] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2)}}</td>
                <td>{{$centro_rumah_sakit[0] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2)}}</td>
                <td>{{$centro_rs_bersalin[0] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2)}}</td>
                <td>{{$centro_apotek[1] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2)}}</td>
                <td>{{$centro_poliklinik[1] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);}}</td>
                <td>{{$centro_puskesmas[1] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2)}}</td>
                <td>{{$centro_pkm_pembantu[1] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2)}}</td>
                <td>{{$centro_rumah_sakit[1] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2)}}</td>
                <td>{{$centro_rs_bersalin[1] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2)}}</td>
                <td>{{$centro_apotek[2] = number_format($n_data_apotek_cc1/$jml_apotek_c1,2)}}</td>
                <td>{{$centro_poliklinik[2] = number_format ($n_data_poliklinik_cc1/$jml_poliklinik_c1,2);}}</td>
                <td>{{$centro_puskesmas[2] = number_format($n_data_puskesmas_cc1/$jml_puskesmas_c1,2)}}</td>
                <td>{{$centro_pkm_pembantu[2] = number_format($n_data_pkm_pembantu_cc1/$jml_pkm_pembantu_c1,2)}}</td>
                <td>{{$centro_rumah_sakit[2] = number_format($n_data_rumah_sakit_cc1/$jml_rumah_sakit_c1,2)}}</td>
                <td>{{$centro_rs_bersalin[2] = number_format($n_data_rs_bersalin_cc1/$jml_rs_bersalin_c1,2)}}</td>
                </tr>
              </tbody>
          </table>  
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection