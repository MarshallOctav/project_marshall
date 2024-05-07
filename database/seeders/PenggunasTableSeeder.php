<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama'=>'Marshall'],
            ['nama'=>'Radiva'],
            ['nama'=>'Hardiansyah'],
            ['nama'=>'Rafly'],
            ['nama'=>'sendi']
        ];

        // masukan data ke database
        DB::table('penggunas')->insert($penggunas);
    }
}
