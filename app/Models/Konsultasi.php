<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    private static $konsul = [
        [
            'pertanyaan' => 'Apakah anak anda mengalami demam?',
        ],
        [
            'pertanyaan' => 'Apakah anak anda mengalami batuk?',
        ],

    ];

    public static function cari()
    {
        return self::$konsul;
    }
}
