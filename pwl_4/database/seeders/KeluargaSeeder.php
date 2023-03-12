<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama' => 'Triyono Hari Waluyo',
                'tanggalLahir' => '22-12-1965',
                'agama' => 'Islam',
                'hubungan' => 'Ayah',
                'gelar' => 'Alm'
            ],
            [
                'nama' => 'Aniek Sulistyorini',
                'tanggalLahir' => '30-07-1969',
                'agama' => 'Islam',
                'hubungan' => 'Ibu',
                'gelar' => 'S.sos'
            ],
            [
                'nama' => 'Dimas Putra Anar Wirjo Atmodjo',
                'tanggalLahir' => '16-03-2003',
                'agama' => 'Islam',
                'hubungan' => 'Anak',
                'gelar' => 'D-IV'
            ],
        ]);
    }
}
