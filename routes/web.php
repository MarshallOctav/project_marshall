<?php

use App\Models\Post;
use App\Models\Produk;
use App\Models\Pengguna;
use App\Models\Telepon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $nama = "Marshall";
    $jenis_kelamin = "Laki-Lakki";
    $alamat = "Jl.Makam Caringin";
    $pendidikan = "SMK";
    $pekerjaan = "Pelajar";
    return view('biodata', compact('nama','jenis_kelamin','alamat','pendidikan','pekerjaan'));
});

Route::get('/home', function () {
    return view('biodata2');
});

Route::get('/kontak', function () {
    return view('biodata3');
});

Route::get('/data_post', function () {
    $posts = Post::all();
    return view('tampil_post', compact('posts'));
});

Route::get('/data_produk', function () {
    $produks = produk::find(3);
    return $produks;
    // return view('tampil_produk', compact('produks'));
});

Route::get('/data_pengguna', function () {
    $penggunas = pengguna::all();
    return view('tampil_pengguna', compact('penggunas'));
});

Route::get('/data_telepon', function () {
    $telepons = telepon::all();
    return view('tampil_telepon', compact('telepons'));
});



// parameter
Route::get('/about2/{nama}/{jenis_kelamin}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request,$nama,$jenis_kelamin,$alamat,$pendidikan,$pekerjaan){

    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param', compact('nama2','jenis_kelamin2','alamat2','pendidikan2','pekerjaan2'));
});