<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\paketlistController;

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
    return view('admin.layout.template');
});
Route::get('/admin', function () {
    return view('admin.layout.template');
});

// Route::get('/landingpage', [paketlistController::class, 'index'])->name('catalogPaket');

Route::get('/landingpage', 'App\Http\Controllers\paketlistController@index');

Route::resource('paketwisata', PaketWisataController::class);
