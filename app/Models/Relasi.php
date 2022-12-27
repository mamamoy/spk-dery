<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relasi extends Model
{
    use HasFactory;

    protected $table = 'relasis';
    protected $fillable = ['id_gejala', 'id_penyakit'];

    public function dataPenyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function dataGejala()
    {
        return $this->belongsToMany(Gejala::class, 'gejalas');
    }
}
