<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Http\Requests\StoreFaskesRequest;
use App\Http\Requests\UpdateFaskesRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FaskesController extends Controller
{

    public function data_faskes(){
        $faskes = DB::table('faskes')->get();
        
        return view('admin.faskes.index',['faskes'=> $faskes]);
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

    public function exportCSV(){
        $filename = 'data-faskes.csv';
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => "attachmen; filename=\"$filename\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];
        return response()->stream(function () {
            $handle = fopen('php://output', 'w');
            // Add CSV headers
            fputcsv($handle, [
                'ID ',
                'Kota ',
                'Apotek',
                'Poliklinik',
                'Puskesmas',
                'Pkm_pembantu',
                'Rumah_sakit',
                'Rs_barsalin',
                'total_faskes'
            ]);
         // Fetch and process data in chunks
            Faskes::chunk(25, function ($faskes) use ($handle) {
                foreach ($faskes as $f) {
             // Extract data from each f$f.
                    $data = [
                        isset($f->id)? $f->id : '',
                        isset($f->Kota)? $f->Kota : '',
                        isset($f->Apotek)? $f->Apotek : '',
                        isset($f->Poliklinik)? $f->Poliklinik : '',
                        isset($f->Puskesmas)? $f->Puskesmas : '',
                        isset($f->Pkm_pembantu)? $f->Pkm_pembantu : '',
                        isset($f->Rumah_sakit)? $f->Rumah_sakit : '',
                        isset($f->Rs_bersalin)? $f->Rs_bersalin : '',
                        isset($f->total_fakses)? $f->total_faskes : '',

                    ];
    
             // Write data to a CSV file.
                    fputcsv($handle, $data);
                }
            });
    
            // Close CSV file handle
            fclose($handle);
        }, 200, $headers);
    }

    public function importCSV(Request $request)
    {
        $request->validate([
            'import_csv' => 'required|mimes:csv',
        ]);
        //read csv file and skip data
        $file = $request->file('import_csv');
        $handle = fopen($file->path(), 'r');

        //skip the header row
        fgetcsv($handle);

        $chunksize = 25;
        while(!feof($handle))
        {
            $chunkdata = [];

            for($i = 0; $i<$chunksize; $i++)
            {
                $data = fgetcsv($handle);
                if($data === false)
                {
                    break;
                }
                $chunkdata[] = $data; 
            }

            $this->getchunkdata($chunkdata);
        }
        fclose($handle);

        return redirect()->route('faskes.create')->with('success', 'Data has been added successfully.');
    }

    public function getchunkdata($chunkdata)
    {
        foreach($chunkdata as $column){
            $id = $column[0];
            $Apotek = $column[1];
            $Poliklinik = $column[2];
            $Puskesmas = $column[3];
            $PkmPembantu = $column[4];
            $RumahSakit = $column[5];
            $RsBersalin = $column[6];

            //create new employee
            $employee = new Faskes();
            $employee->id = $id;
            $employee->Apotek= $Apotek;
            $employee->Poliklinik = $Poliklinik;
            $employee->Puskesmas = $Puskesmas;
            $employee->Pkm_pembantu = $PkmPembantu;
            $employee->Rumah_sakit = $RumahSakit;
            $employee->Rs_bersalin = $RsBersalin;
            $employee->save();
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $faskes = DB::table('faskes');
        return view('admin.faskes.add',['faskes' => $faskes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faskes::create([
            'id' =>$request->id,
            'Kota'=>$request->Kota,
            'id_kota'=>$request->id_kota,
            'Apotek'=>$request->Apotek,
            'Poliklinik'=>$request->Poliklinik,
            'Puskesmas'=>$request->Puskesmas,
            'Pkm_pembantu'=>$request->PkmPembantu,
            'Rumah_sakit'=>$request->RumahSakit,
            'Rs_bersalin'=>$request->RsBersalin,
        ]);
        return redirect('admin.faskes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faskes $faskes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	$faskes = DB::table('faskes')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('admin.faskes.edit',['faskes' => $faskes]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {   
       $faskes= DB::table('faskes')->where('id',$request->id)->update([
            'Kota'=>$request->Kota,
            'Apotek'=>$request->Apotek,
            'Poliklinik'=>$request->Poliklinik,
            'Puskesmas'=>$request->Puskesmas,
            'Pkm_pembantu'=>$request->PkmPembantu,
            'Rumah_sakit'=>$request->RumahSakit,
            'Rs_bersalin'=>$request->RsBersalin,
        ]);
        if ($faskes) {
            return redirect('/admin/datafasilitaskesehatan')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect('/admin/datafasilitaskesehatan')->with('error', 'Data tidak ditemukan atau tidak ada perubahan');
        }     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faskes $faskes)
    {
        //
        $faskes = Faskes::findOrFail($faskes);
        $faskes->delete();
        return redirect('/admin/datafasilitaskesehatan')->with('success', 'Data berhasil dihapus');
    }

}
