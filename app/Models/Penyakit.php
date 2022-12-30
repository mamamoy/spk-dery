<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'penyakits';
    protected $fillable = ['kode', 'nama_penyakit', 'definisi', 'solusi'];

    public function Gejala()
    {
        return $this->hasMany(Gejala::class);
    }
    public function Relasi()
    {
        return $this->belongsTo(Relasi::class, 'relasis');
    }
}
