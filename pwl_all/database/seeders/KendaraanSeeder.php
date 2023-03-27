<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol' => 'N 123 NG',
                'merk' => 'Honda',
                'jenis' => 'crv',
                'tahun_buat'=>'2020',
                'warna' => 'putih'
            ],
            [
                'nopol' => 'N 1111 GA',
                'merk' => 'Toyota',
                'jenis' => 'Pajero',
                'tahun_buat'=>'2021',
                'warna' => 'hitam'
            ]
        ]);
    }
}
