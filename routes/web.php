<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ExportController;

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

// Menampilkan halaman daftar buku untuk user
Route::get('/', [BookController::class, 'index']);

// Route Auth
Auth::routes();

// Route yang di tampilkan setelah Auth(Login)
Route::group(['middleware' => ['auth']], function() {
    // Menampilkan semua route yang ada di BookController, karena menggunaan Resource
    Route::resource('/book', BookController::class);

    //Menampilakan halaman home (daftar buku) setelah login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Menampilkan fungsi search (ada pada home controller)
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

    //Menampilkan halaman export
    Route::get('/export', [App\Http\Controllers\ExportController::class, 'index'])->name('export');

});
