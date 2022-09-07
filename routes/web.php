<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SenaraiPenggunaController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserList2Controller;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::resource('senaraipengguna', SenaraiPenggunaController::class);

Route::get('/editprofile', [UserProfileController::class, 'edit'])->name('editprofile');
Route::put('/editprofile', [UserProfileController::class, 'update'])->name('updateprofile');

// Route::get('/senaraipengguna', [PenggunaController::class, 'index'])->name('senaraipengguna');

// Route::get('/userlist', [UserListController::class, 'index'])->name('index');
// Route::post('/adduser', [UserListController::class, 'create'])->name('add.user');

Route::resource('userlist2', UserList2Controller::class);
// Route::resource('/userlist2', UserList2Controller::class)->names([
//     'index' => 'userlist2.index'
// ]);




