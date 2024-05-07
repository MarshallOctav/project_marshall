<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Handphone', 'merek'=>'Iphone 11', 'jumlah'=>13],
            ['nama_produk'=>'Handphone', 'merek'=>'Iphone xr', 'jumlah'=>44],
            ['nama_produk'=>'Handphone', 'merek'=>'Poco M3', 'jumlah'=>10],
            ['nama_produk'=>'Handphone', 'merek'=>'Poco X3', 'jumlah'=>44],
            ['nama_produk'=>'Handphone', 'merek'=>'Xiaomi Redmi Note 10', 'jumlah'=>31],
            ['nama_produk'=>'Laptop', 'merek'=>'Acer Aspire 3', 'jumlah'=>32],
            ['nama_produk'=>'Laptop', 'merek'=>'HP', 'jumlah'=>111],
            ['nama_produk'=>'Laptop', 'merek'=>'Asus', 'jumlah'=>76],
            ['nama_produk'=>'Laptop', 'merek'=>'Rog', 'jumlah'=>81],
            ['nama_produk'=>'Laptop', 'merek'=>'Advan', 'jumlah'=>13]
        ];
        // masukan data ke database
        DB::table('produks')->insert($produks);
    }
}
