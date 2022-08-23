<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PenggunaController;

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
    return view('auth.login');
});

// Route::get('/senaraipengguna', function () {
//     return view('senaraipengguna');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/editprofile', [UserProfileController::class, 'edit'])->name('editprofile');
Route::put('/editprofile', [UserProfileController::class, 'update'])->name('updateprofile');

Route::get('/senaraipengguna', [PenggunaController::class, 'index'])->name('senaraipengguna');


