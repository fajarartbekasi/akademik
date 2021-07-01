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

Route::group(['prefix'=>'mapel'], function(){
    Route::get('/', [App\Http\Controllers\Mapel\MapelController::class,'index'])->name('mapel');
    Route::post('', [App\Http\Controllers\Mapel\MapelController::class,'store'])->name('mapel.store');
});

Route::group(['prefix'=>'grades'], function(){
    route::get('/',[App\Http\Controllers\Grade\GradeController::class,'index'])->name('grades');
    route::post('store',[App\Http\Controllers\Grade\GradeController::class,'store'])->name('grades.store');
});

Route::group(['prefix'=>'rooms'], function(){
    route::get('/',[App\Http\Controllers\Room\RoomController::class,'index'])->name('rooms');
    route::post('store',[App\Http\Controllers\Room\RoomController::class,'store'])->name('rooms.store');
});


Route::group(['prefix' => 'users'], function(){
    route::get('/student/{user}',[App\Http\Controllers\Management\SiswaController::class, 'edit'])->name('users.student');
});


Route::group(['prefix' => 'students'], function(){
    route::get('/', [App\Http\Controllers\Walas\StudentController::class,'index'])->name('students');
    route::get('/show-profile/{user}',[App\Http\Controllers\Profile\StudentController::class,'show'])->name('students.show-profile');
});

Route::group(['prefix' => 'schedules'], function(){
    route::get('/', [App\Http\Controllers\ScheduleController::class,'index'])->name('schedules');
});