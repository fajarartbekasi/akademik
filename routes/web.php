<?php

use Illuminate\Support\Facades\Route;

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


Route::get('user/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('user.create');
Route::post('user/store', [App\Http\Controllers\User\UserController::class, 'store'])->name('user.store');


Route::group(['prefix'=>'management'], function(){
    Route::get('user', [App\Http\Controllers\Management\ManagementuserController::class, 'index'])->name('management.user');

    Route::get('siswa',[App\Http\Controllers\Management\SiswaController::class, 'index'])->name('management.siswa');

    Route::get('guru',[App\Http\Controllers\Management\GuruController::class, 'index'])->name('management.guru');

    Route::get('walas',[App\Http\Controllers\Management\WalasController::class, 'index'])->name('management.walas');
});