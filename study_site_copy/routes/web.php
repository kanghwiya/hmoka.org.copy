<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\UserController;

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
    return view('home');
})->name('main');

Route::get('/login', [UserController::class, 'loginget'])->name('login');
Route::post('/loginpost', [UserController::class, 'loginpost'])->name('login.post');
Route::get('/regist', [UserController::class, 'registrationget'])->name('regist');
Route::post('/registcomplete', [UserController::class, 'registrationpost'])->name('regist.post');
Route::get('/logout', [UserController::class, 'logoutget'])->name('logout');


Route::resource('/board', BoardController::class);
