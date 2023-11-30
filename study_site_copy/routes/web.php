<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriteBoardController;

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


Route::get('/login', [UserController::class, 'loginget'])->name('login');
Route::post('/loginpost', [UserController::class, 'loginpost'])->name('login.post');
Route::get('/regist', [UserController::class, 'registrationget'])->name('regist');
Route::post('/registcomplete', [UserController::class, 'registrationpost'])->name('regist.post');
Route::get('/logout', [UserController::class, 'logoutget'])->name('logout');


// 보드
Route::resource('/board', BoardController::class);
Route::get('/', [BoardController::class, 'mainget'])->name('main.get');
Route::get('/exhibitionlist', [BoardController::class, 'exhibitionlist'])->name('exhibitionlist');


// favorite 보드
Route::post('/userfavorite', [FavoriteBoardController::class, 'userfavoritepost'])->name('favorite.post');
Route::get('/favorite', [FavoriteBoardController::class, 'favoriteget'])->name('favorite');


// GET|HEAD        board ............................................................................................ board.index › BoardController@index  
// POST            board ............................................................................................ board.store › BoardController@store  
// GET|HEAD        board/create ................................................................................... board.create › BoardController@create  
// GET|HEAD        board/{board} ...................................................................................... board.show › BoardController@show  
// PUT|PATCH       board/{board} .................................................................................. board.update › BoardController@update  
// DELETE          board/{board} ................................................................................ board.destroy › BoardController@destroy  
// GET|HEAD        board/{board}/edit ................................................................................. board.edit › BoardController@edit  