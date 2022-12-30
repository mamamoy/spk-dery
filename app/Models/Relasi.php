<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relasi extends Model
{
    use HasFactory;

    protected $table = 'relasis';
    protected $fillable = ['gejala_id', 'penyakit_id'];

    public function dataPenyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function dataGejala()
    {
        return $this->hasMany(Gejala::class, 'id');
    }
}
