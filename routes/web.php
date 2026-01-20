<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

// Halaman tentang
Route::get('/tentang', function () {
    return view('tentang');
});

// 🟡 Halaman kontak
Route::get('/kontak', function () {
    return view('kontak');
});