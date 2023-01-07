<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejala = [

            [
                'kode_gejala' => 'G001',
                'nama_gejala' => 'Demam',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G002',
                'nama_gejala' => 'Mata merah dan berair',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G003',
                'nama_gejala' => 'Batuk',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G004',
                'nama_gejala' => 'Pilek',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G005',
                'nama_gejala' => 'Bagian rongga mulut terdapat bercak putih',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G006',
                'nama_gejala' => 'Muncul kemerahan pada kulit',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G007',
                'nama_gejala' => 'Terdapat ruam berwarna coklat kemerahan di seluruh
            tubuh',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G008',
                'nama_gejala' => 'Menggigil',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G009',
                'nama_gejala' => 'Tekanan darah meningkat',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G010',
                'nama_gejala' => 'Lemas',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G0011',
                'nama_gejala' => 'Muncul ruam kecil berwarna merah',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G012',
                'nama_gejala' => 'Hilangnya nafsu makan',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G013',
                'nama_gejala' => 'Susah buang air besar',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G014',
                'nama_gejala' => 'Sakit kepala ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G015',
                'nama_gejala' => 'Muntah',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G016',
                'nama_gejala' => 'Suhu badan cenderung naik turun',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G017',
                'nama_gejala' => 'Mual ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G018',
                'nama_gejala' => 'Feses cair',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G019',
                'nama_gejala' => 'Feses encer',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G020',
                'nama_gejala' => 'Buang air besar lebih sering 3x sehari ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G021',
                'nama_gejala' => 'Kelenjar air liur meningkat ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G022',
                'nama_gejala' => 'Kram pada perut ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G023',
                'nama_gejala' => 'Keringat dingin secara tiba-tiba',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G024',
                'nama_gejala' => 'Mengalami kejang',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G025',
                'nama_gejala' => 'Denyut jantung cepat',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G026',
                'nama_gejala' => 'Pernafasan terasa cepat',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G027',
                'nama_gejala' => 'Kulit terasa hangat',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G028',
                'nama_gejala' => 'Terdapat suara nafas tambahan',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G029',
                'nama_gejala' => 'Dahak secara berlebihan',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G030',
                'nama_gejala' => 'Suara pernafasan terasa kering',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G031',
                'nama_gejala' => 'Pola nafas berubah',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G032',
                'nama_gejala' => 'Sulit berbicara',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G033',
                'nama_gejala' => 'Jumlah nafas diatas normal (lebih dari 24-40x/menit) ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G034',
                'nama_gejala' => 'Berat badan menurun minimal 10% dibawah rentang
            ideal',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G035',
                'nama_gejala' => 'Mudah terkena sakit ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G036',
                'nama_gejala' => 'Tubuh anak lebih pendek',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G037',
                'nama_gejala' => 'Mengalami gangguan belajar ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G038',
                'nama_gejala' => 'Adanya gangguan tumbuh kembang',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G039',
                'nama_gejala' => 'Pertumbuhan tubuh dan gigi terlambat',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G040',
                'nama_gejala' => 'Sakit perut ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G041',
                'nama_gejala' => 'Terdapat cacing pada tinja',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G042',
                'nama_gejala' => 'Adanya darah pada feses',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G043',
                'nama_gejala' => 'Feses keras',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G044',
                'nama_gejala' => 'Buang air besar kurang dari 2 minggu sekali ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G045',
                'nama_gejala' => 'Perut terasa penuh ',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G046',
                'nama_gejala' => 'Buang air besar terasa sakit',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G047',
                'nama_gejala' => 'Sakit pada bagian leher',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G048',
                'nama_gejala' => 'Sulit menelan makanan',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'kode_gejala' => 'G049',
                'nama_gejala' => 'Amandel merah dan bengkak',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('gejalas')->insert($gejala);
    }
}
