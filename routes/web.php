<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controller\PublisherController;
use App\Http\Controller\KategoriController;
use App\Http\Controller\BukuController;
use App\Http\Controller\MemberController;
use App\Http\Controller\FrontendController;


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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('frontend');
});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('detail/{id}', [App\Http\Controllers\FrontendController::class, 'show']);
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::resource('publisher', App\Http\Controllers\PublisherController::class)->middleware('auth');
Route::resource('kategori', App\Http\Controllers\KategoriController::class)->middleware('auth');
Route::resource('buku', App\Http\Controllers\BukuController::class)->middleware('auth');
Route::resource('user', App\Http\Controllers\UserController::class)->middleware('auth');
// Route::resource('member', App\Http\Controllers\MemberController::class)->middleware('auth');

Auth::routes();
