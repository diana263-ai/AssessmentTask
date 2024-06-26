<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/vision', [App\Http\Controllers\HomePageController::class, 'vision'])->name('vision');
Route::get('/history', [App\Http\Controllers\HomePageController::class, 'history'])->name('history');