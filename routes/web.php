<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', App\Http\Controllers\MahasiswaController::class);
Route::resource('kelas', App\Http\Controllers\KelasController::class);
Route::resource('matakuliah', App\Http\Controllers\MataKuliahController::class);
Route::resource('ktm', App\Http\Controllers\KtmController::class);
Route::resource('krs', App\Http\Controllers\KrsController::class);