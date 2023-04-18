<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\karyawanController;

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
    return view('Login');
});
Route::get('/test', [AccountController::class, 'index']);
Route::get('/test', [AccountController::class, 'create']);
Route::post('/store', [AccountController::class, 'store']);
Route::post('/authorization', [AccountController::class, 'authorization']);
Route::get('/Signin',function(){return view('Signin'); });
Route::post('/store2', [karyawanController::class, 'store2']);

Route::get('/LamanPaketPemesanan', function () {
    return view('LamanPaketPemesanan');
});

Route::get('/LamanPendaftaran', function () {
    return view('LamanPendaftaran');
});

