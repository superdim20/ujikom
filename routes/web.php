<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PublisherController;
use App\Http\Controller\KategoriController;
use App\Http\Controller\BukuController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('publisher', App\Http\Controllers\PublisherController::class)->middleware('auth');
Route::resource('kategori', App\Http\Controllers\KategoriController::class)->middleware('auth');
Route::resource('buku', App\Http\Controllers\BukuController::class)->middleware('auth');
Auth::routes();
