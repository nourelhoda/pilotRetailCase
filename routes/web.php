<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
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


Route::get('/',[HomeController::class,'index']);
Route::get('/messages',[MessageController::class,'index']);
Route::get('/messages/create',[MessageController::class,'create']);
Route::post('/messages',[MessageController::class,'store']);
Route::get('/messages/{message}',[MessageController::class,'show']);
