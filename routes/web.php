<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');