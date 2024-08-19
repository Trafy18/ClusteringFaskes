<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = 'wilayah';
    protected $primaykey = 'id_kota';
    protected $fillable = ['id_kota', 'Kota', 'jml_kecamatan', 'jml_desa_kelurahan',  'indeks_kesehatan', 'jumlah_penduduk','luas_wilayah'];
}
