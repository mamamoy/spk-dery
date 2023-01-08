<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    protected $table = 'konsuls';
    protected $fillable =['penyakit_id', 'user_id'];

    public function dataPenyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
