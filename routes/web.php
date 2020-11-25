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

Route::get('/login',[\App\Http\Controllers\Auth\AuthController::class,'showLoginForm'])->name('login');
Route::get('/register',[\App\Http\Controllers\Auth\AuthController::class,'showRegistrationForm'])->name('register');
Route::get('/news',[\App\Http\Controllers\NewsController::class,"getNews"]);
Route::get('/myposts',[\App\Http\Controllers\NewsController::class,"getPosts"]);
Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'profile']);

