<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\pemesananCOntroller;

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
Route::post('/store3', [pemesananCOntroller::class, 'store3']);


Route::get('/LamanPaketPemesanan', function () {
    return view('LamanPaketPemesanan');
});

Route::get('/LamanPendaftaran', function () {
    return view('LamanPendaftaran');
});


Route::get('/Main', function () {
    return view('mainPage');
});

Route::get('/LamanPemesanan', function () {
    return view('LamanPemesanan');
});

Route::post('/auth', [AccountController::class, 'authentication']);
Route::post('/authK', [karyawanController::class, 'authk']);
Route::post('/auth', [AccountController::class, 'authentication']);
Route::post('/reset', [AccountController::class, 'reset']);
Route::post('/store5', [pemesananCOntroller::class, 'store5']);

Route::get('/approval', function () {
    return view('aproval');
});
Route::get('/karyawan', function () {
    return view('karyawan');
});
Route::get('/pemesanan', function () {
    return view('pemesanan');
});
Route::get('/LoginKaryawan', function () {
    return view('LoginKaryawan2');
});
Route::get('/pemesananAdmin', function () {
    return view('pemesananAdmin');
});
Route::get('/Adminmenu', function () {
    return view('adminMenu');
});
Route::get('/mainTemp', function () {
    return view('lamanUtamatemp');
});
Route::get('/Homepage', function () {
    return view('LamanHomePage');
});
Route::get('/resetPassword', function () {
    return view('resetPassword');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/Account', function () {
    return view('Account');
});

