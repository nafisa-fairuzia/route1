<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nama = "Nafisa Fairuzia";
    $jurusan = "Rekayasa Perangkat Lunak";
    $makananFavorit = "Mie Pangsit";
    
    return "
        <h1>Informasi Pribadi</h1>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Jurusan:</strong> $jurusan</p>
        <p><strong>Makanan Favorit:</strong> $makananFavorit</p>
    ";
});
