<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/guru', \App\Http\Controllers\GuruController::class);
Route::resource('/mapel', \App\Http\Controllers\MapelController::class);
Route::resource('/pengajar', \App\Http\Controllers\PengajarController::class);



