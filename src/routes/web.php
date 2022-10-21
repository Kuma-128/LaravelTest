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
    return view('top');
})->name('top');

Route::get('/kuma', [App\Http\Controllers\IndexController::class, 'kuma'])->name('kuma');
Route::get('/register', [App\Http\Controllers\IndexController::class, 'showRegister'])->name('register');
Route::get('/login', [App\Http\Controllers\IndexController::class, 'showLogin'])->name('login');
Route::post('/check', [App\Http\Controllers\IndexController::class, 'checkRegister'])->name('checkRegister');
