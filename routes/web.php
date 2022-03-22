<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\irbaController;
use App\Http\Controllers\biodataController;
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

Route::get('/', [irbaController::class,'index']);
Route::get('/biodata', [biodataController::class,'biodata']);
Route::get('/komentar', [komentarController::class,'komentar']);
