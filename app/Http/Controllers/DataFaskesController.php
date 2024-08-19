<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class DataFaskesController extends Controller
{
    
    public function tampil_data()
    {
        //ambil data faskes
        $faskes = DB::table('faskes')->get();

        //kirim data faskes
        return view('landingpage.data',['faskes' => $faskes]);
        

    }
    public function store(Request $request)
    {
        DB::table('faskes')->insert([
            'Kota'=>$request->Kota,
            'Apotek'=>$request->Apotek,
            'Poliklinik'=>$request->Poliklinik,
            'Puskesmas'=>$request->Puskesmas,
            'Pkm_pembantu'=>$request->PkmPembantu,
            'Rumah_sakit'=>$request->RumahSakit,
            'Rs_bersalin'=>$request->RsBersalin,
            'total_faskes'=>$request->TotalFaskes


        ]);
        return redirect('landingpage.data');
    }
}
