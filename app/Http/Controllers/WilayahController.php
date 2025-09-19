<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use App\Http\Requests\StoreWilayahRequest;
use App\Http\Requests\UpdateWilayahRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wilayah= DB::table('wilayah')->get();
        return view('admin.wilayah.index',['wilayah'=> $wilayah]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayah = DB::table('wilayah');
        return view('admin.wilayah.add',['wilayah' => $wilayah]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $wilayah =  DB::table('wilayah')->insert([
            // 'id_kota' =>$request->id,
            'Kota'=>$request->Kota,
            'jml_kecamatan'=>$request->JumlahKecamatan,
            'jml_desa_kelurahan'=>$request->JumlahDesaKelurahan,
            'indeks_kesehatan'=>$request->IndeksKesehatan,
            'jml_penduduk'=>$request->JumlahPenduduk,
            'luas_wilayah'=>$request->LuasWilayah,
        ]);
        if ($wilayah) {
            return redirect('/admin/datawilayah')->with('success', 'Data berhasil diinput');
        } else {
            return redirect('/admin/datawilayah')->with('error', 'Data gagal ditambahkan');
        } 
    }


    /**
     * Display the specified resource.
     */
    public function show(Wilayah $wilayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $wilayah = DB::table('wilayah')->where('id_kota',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.wilayah.edit',['wilayah' => $wilayah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        $wilayah = DB::table('wilayah')->where('id_kota',$request->id)->update([
            'Kota'=>$request->Kota,
            'jml_kecamatan'=>$request->JumlahKecamatan,
            'jml_desa_kelurahan'=>$request->JumlahDesaKelurahan,
            'indeks_kesehatan'=>$request->IndeksKesehatan,
            'jml_penduduk'=>$request->JumlahPenduduk,
            'luas_wilayah'=>$request->LuasWilayah,
        ]);
        if ($wilayah) {
            return redirect('/admin/datawilayah')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect('/admin/datawilayah')->with('error', 'Data tidak ditemukan atau tidak ada perubahan');
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        DB::table('wilayah')->where('id_kota',$id)->delete();
        return redirect('/admin/datawilayah');
    }
}
