<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('hobi')->insert([
            [
                'hobi' => 'Basket',
                'alasan' => 'Karena memang suka'
            ],
            [
                'hobi' => 'Musik',
                'alasan' => 'Karena memang suka'
            ],
            [
                'hobi' => 'Coding',
                'alasan' => 'Karena memang suka'
            ],
        ]);
    }
}
