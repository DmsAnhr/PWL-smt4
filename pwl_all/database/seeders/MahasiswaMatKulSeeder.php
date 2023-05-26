<?php

namespace Database\Seeders;

use App\Models\Mahasiswa_MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaMatKulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 1,
                'nilai' => 95.5,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 2,
                'nilai' => 80.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 3,
                'nilai' => 90.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 4,
                'nilai' => 90.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 5,
                'nilai' => 90.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 6,
                'nilai' => 88.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 7,
                'nilai' => 83.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 8,
                'nilai' => 95.0,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 9,
                'nilai' => 95.0,
            ],
        ];

        Mahasiswa_MataKuliah::insert($data);
    }
}
