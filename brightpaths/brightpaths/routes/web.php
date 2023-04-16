<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
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
Route::get('/Signin',function(){return view('Signin'); });


Route::get('/LamanPaketPemesanan', function () {
    return view('LamanPaketPemesanan');
});

