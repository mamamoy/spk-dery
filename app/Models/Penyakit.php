<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'penyakits';
    protected $fillable = ['kode', 'nama_penyakit', 'definisi', 'solusi'];

    public function relasiGejala()
    {
        return $this->hasMany(Relasi::class, 'id_gejala');
    }
    public function relasiPenyakit()
    {
        return $this->hasMany(Relasi::class, 'id_penyakit');
    }
}
