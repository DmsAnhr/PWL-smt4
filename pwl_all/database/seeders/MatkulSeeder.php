<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'nama' => 'Pemrograman Web Lanjut',
                'singkatan' => 'PWL',
                'hari' => 'Senin',
                'jam' => '1-6',
                'dosen' => 'Moch Zawaruddin',
                'totalJam' => 6
            ],
            [
                'nama' => 'Statistika Komputasi',
                'singkatan' => 'Stat_Kom',
                'hari' => 'Senin',
                'jam' => '9-12',
                'dosen' => 'Elok Nur Hamdana',
                'totalJam' => 6
            ],
            [
                'nama' => 'Proyek 1',
                'singkatan' => 'Proyek_1',
                'hari' => 'Selasa',
                'jam' => '1-6',
                'dosen' => 'Farid Angga Pribadi',
                'totalJam' => 6
            ],
            [
                'nama' => 'Business Intelligence',
                'singkatan' => 'BI',
                'hari' => 'Selasa',
                'jam' => '9-12',
                'dosen' => 'Endah Septa Sintiya',
                'totalJam' => 6
            ],
            [
                'nama' => 'Jaringan Kominukasi',
                'singkatan' => 'Jarkom',
                'hari' => 'Rabu',
                'jam' => '1-4',
                'dosen' => 'Kadek Suarjuna',
                'totalJam' => 6
            ],
            [
                'nama' => 'Manajemen Proyek',
                'singkatan' => 'Manaj_Proyek',
                'hari' => 'Rabu',
                'jam' => '10-12',
                'dosen' => 'Candra Bella Vista',
                'totalJam' => 6
            ],
            [
                'nama' => 'Kewarganegaraan',
                'singkatan' => 'KWN',
                'hari' => 'Kamis',
                'jam' => '1-2',
                'dosen' => 'Widaningsih',
                'totalJam' => 6
            ],
            [
                'nama' => 'Analisis Desain Berorientasi Obyek',
                'singkatan' => 'ADBO',
                'hari' => 'Kamis',
                'jam' => '2-6',
                'dosen' => 'Ariadi Retno Ririd',
                'totalJam' => 6
            ],
            [
                'nama' => 'Praktikum Jaringan Kominukasi',
                'singkatan' => 'Prak_Jarkom',
                'hari' => 'Jumat',
                'jam' => '2-5',
                'dosen' => 'Kadek Suarjuna',
                'totalJam' => 6
            ],
        ]);
    }
}
