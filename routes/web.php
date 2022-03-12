<?php

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
    return view('home',[
        "title" => "home"
    ]);
});
Route::get('/biodata', function () {
    return view('biodata',[
        "title" => "biodata",
        "nama" => "Irba Adika Jaya",
        "ttl" => "Malang, 12 Agustus 2002",
        "jenkel" => "Laki-laki",
        "agama" => "Islam",
        "alamat" => "Jalan Ki Ageng Gribig I/37A",
        "telepon" => "081217537602",
        "email" => "irbaadika123@gmail.com",
        "status" => "Mahasiswa"
    ]);
});
Route::get('/komentar', function () {
    return view('komentar',[
        "title" => "komentar"
    ]);
});
