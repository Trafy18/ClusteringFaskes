<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faskes;

class cluster extends Model
{
    use HasFactory;
    protected $table = 'centroid';
    //mapping ke kolom atau fieldnya
    protected $fillable = ['id_centroid','Klaster','Kota', 'Poliklinik', 'Puskesmas', 'Pkm_pembantu', 'Rumah_sakit', 'Rs_bersalin','centroid','Keterangan'];


}
