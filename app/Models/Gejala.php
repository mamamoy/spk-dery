<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejalas';
    protected $fillable = ['kode_gejala', 'nama_gejala'];

    public function Penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function Relasi()
    {
        return $this->belongsTo(Relasi::class);
    }
}
