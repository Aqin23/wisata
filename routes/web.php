<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\detailWisataController;
use App\Http\Controllers\MultiUser;
use App\Http\Controllers\paketlistController;
use App\Http\Controllers\detailpaketlistController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ManagePesananController;
use App\Http\Controllers\userController;

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

Auth::routes();

// Route::get('/', function () {
//     return view('admin.layout.template');
// });
// Route::get('/admin', function () {
//     return view('admin.layout.template');
// });

Route::get('/', [MultiUser::class, 'index'])->name('/');
Route::get('/home', [paketlistController::class, 'index'])->name('homePage');
Route::get('/DetailList/{id}', [detailpaketlistController::class, 'show'])->name('detailList');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    // Admin
    Route::view('/dashboard', 'admin.layout.template')->name('dashboard');
    Route::resource('paketwisata', PaketWisataController::class);
    Route::resource('detailwisata', detailWisataController::class);
    Route::resource('user', userController::class);
    Route::get('/managepesanan', [ManagePesananController::class, 'index'])->name('managePesanan');
    Route::get('/managepesanan-verifikasi/{id}', [ManagePesananController::class, 'updateVerifikasi'])->name('managePesanan-verifikasi');
    Route::get('/managepesanan-batal/{id}', [ManagePesananController::class, 'updateBatal'])->name('managePesanan-batal');


    // Landing
    Route::get('/checkout/{id}', [CheckoutController::class, 'show'])->name('checkout');
    Route::post('/checkout-store', [CheckoutController::class, 'store'])->name('checkout-store');
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');
    Route::get('/pesanan-qrcode/{id}', [PesananController::class, 'show'])->name('pesanan-qrcode');
});
