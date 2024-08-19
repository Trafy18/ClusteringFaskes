<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perhitungan;

class Faskes extends Model
{
    use HasFactory;
    protected $table = 'faskes';
    //mapping ke kolom atau fieldnya
    protected $fillable = ['id', 'Kota', 'id_kota','Apotek','Poliklinik', 'Puskesmas', 'Pkm_pembantu', 'Rumah_sakit', 'Rs_bersalin'];

    public function cluster(){
        return $this->belongsTo(Perhitungan::class);
    }
}

