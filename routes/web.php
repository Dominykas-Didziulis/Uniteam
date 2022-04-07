<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Controller;
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
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/game', function () {
    return view('gametest');
});
Route::get('/registracija',[CustomAuthController::class, 'registration'])->middleware('isLoggedIn');
Route::get('/prisijungti',[CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/atsijungti', [CustomAuthController::class, 'logout']);
Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/admin',[AdminController::class,'show']);
