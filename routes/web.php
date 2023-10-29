<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BaiVietController;
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

Route::get('/home',[HomeController::class,'home'] );
Route::get('/baiviet/index',[BaiVietController::class,'index'])->name('baiviet.index');
Route::get('/baiviet/add',[BaiVietController::class,'add'])->name('baiviet.add');
Route::post('/baiviet/add',[BaiVietController::class,'save'])->name('baiviet.save');