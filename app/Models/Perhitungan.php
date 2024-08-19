<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faskes;

class Perhitungan extends Model
{
    use HasFactory;
    // protected $table = ['hasil'];
    protected $fillable= ['id_kota','kota','C1','C2','C3','cluster_terdekat'];

    public function setTableName($tablename)
    {
        $this->table = $tablename;
    }

    public function centroid()
    {
        return $this->hasMany(Faskes::class, '');
    }

    
}
