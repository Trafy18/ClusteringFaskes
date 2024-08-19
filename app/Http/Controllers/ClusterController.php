<?php

namespace App\Http\Controllers;

use App\Models\cluster;
use App\Models\Faskes;
use App\Http\Requests\StoreclusterRequest;
use App\Http\Requests\UpdateclusterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centroid = DB::table('centroid')->get();
        return view('admin.cluster.index',['centroid'=> $centroid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $centroid = cluster::create([
            'Klaster'=>$request->Cluster,
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

    /**
     * Display the specified resource.
     */
    public function show(cluster $cluster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $centroid = DB::table('centroid')->where('id_centroid',$id)->get();
        return view('admin.cluster.edit',['centroid'=> $centroid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cluster $cluster)
    {
        $centroid = DB::table('centroid')->where('id_centroid',$request->id)->update([
            'Klaster'=>$request->Klaster,
            'Apotek'=>$request->Apotek,
            'Poliklinik'=>$request->Poliklinik,
            'Puskesmas'=>$request->Puskesmas,
            'Pkm_pembantu'=>$request->PkmPembantu,
            'Rumah_sakit'=>$request->RumahSakit,
            'Rs_bersalin'=>$request->RsBersalin,
        ]);
        if ($centroid) {
            return redirect('/admin/centroid')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect('/admin/centroid')->with('error', 'Data tidak ditemukan atau tidak ada perubahan');
        }    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cluster $cluster)
    {
        //
    }
}
