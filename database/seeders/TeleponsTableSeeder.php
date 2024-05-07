<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
           ['nomor_telepon'=>'0987678987', 'pengguna_id'=>1],
           ['nomor_telepon'=>'08777686876', 'pengguna_id'=>2],
           ['nomor_telepon'=>'0987678987', 'pengguna_id'=>3],
           ['nomor_telepon'=>'088654345654', 'pengguna_id'=>4],
           ['nomor_telepon'=>'08765432345', 'pengguna_id'=>5]

        ];
        // masukan data ke database
        DB::table('telepons')->insert($telepons);
    }
}
