<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyakit = [
            [
                'kode' => 'P001',
                'nama_penyakit' => 'Campak (Rubella)',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P002',
                'nama_penyakit' => 'Demam Typhoid (Tipes)',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P003',
                'nama_penyakit' => 'Diare',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P004',
                'nama_penyakit' => 'Muntaber ',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P005',
                'nama_penyakit' => 'Kejang Demam',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P006',
                'nama_penyakit' => 'Infeksi Saluran Pernapasan Akut (ISPA)',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P007',
                'nama_penyakit' => 'Stunting',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P008',
                'nama_penyakit' => 'Cacingan',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P009',
                'nama_penyakit' => 'Sembelit (Konstipasi)',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode' => 'P010',
                'nama_penyakit' => 'Radang Tenggorokan',
                'definisi' => null,
                'solusi' => null,
                'published_at' => null,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];
        DB::table('penyakits')->insert($penyakit);
    }
}
