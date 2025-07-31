<?php

use App\Models\Posts;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Dashboard']);
});

Route::get('/data-siswa', [SiswaController::class, 'index']);

Route::get('/dashboard', function () {
    return view('home', ['title' => 'Dashboard']);
});

Route::get('/wc', function () {
    return view('welcome', ['title' => 'Def']);
});

Route::get('/class', function () {
    return view('kelas', ['title' => 'Daftar Kelas']);
});

Route::get('/nilai', function () {
    return view('nilai', ['title' => 'Daftar Nilai']);
});

Route::get('/laporan', function () {
    return view('laporan', ['title' => 'Daftar Laporan']);
});