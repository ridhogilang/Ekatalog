<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'home');
    Route::get('/mobil', 'mobil');
    Route::get('/mobil/{merkmobil}/{mobil}/sparepart', 'sparepart');
    Route::get('/mobil/{merkmobil}/{mobil}/sparepart/merkpart/{jenispart}', 'merkpart');
    Route::get('/mobil/{merkmobil}/{mobil}/sparepart/merkpart/{jenispart}/detail/{id}', 'detail');
    Route::get('/user', 'user');
});

Route::controller(MobilController::class)->group(function () {
    Route::get('/mobil', 'index');
    Route::get('/mobil/{merkmobil}/', 'navbar');
});

Route::controller(SettingController::class)->group(function () {
    Route::get('/setting', 'index');
    Route::get('/control', 'control');
    Route::get('/datamobil', 'datamobil');
    Route::get('/datamobil/edit/{id}', 'mobiledit');
    Route::get('datamobil/create', 'create');
    Route::delete('/deletemobil/{id}', 'deletemobil');
    Route::post('/create', 'store');
    Route::get('/sparepart', 'sparepart');
    Route::get('/sparepart/create', 'addpart');
    Route::post('/addpart', 'tambah');
    Route::get('/sparepart/editpart/{id}', 'editpart');
    Route::put('/updatepart', 'updatepart');
    Route::delete('/deletepart/{id}', 'deletepart');
    Route::get('/datauser', 'user');
    Route::delete('/deleteuser/{id}', 'deleteuser');

});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

