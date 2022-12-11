<?php

use Illuminate\Support\Facades\Route;
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
    return view('home-adam');
});


Route::get('/login', [UserController::class, 'login_view']);


Route::get('/daftar', [UserController::class, 'daftar_view']);


Route::get('/logout', [UserController::class, 'logout']);


Route::post('/login', [UserController::class, 'login']);


Route::post('/daftar', [UserController::class, 'daftar']);


