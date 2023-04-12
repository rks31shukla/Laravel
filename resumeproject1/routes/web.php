<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
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
    return view('home');
})->name('home');
Route::get('skill', function () {
    return view('skill');
})->name('skill') ;

Route::get('services',[ServiceController::class,'show'])->name('services');
Route::get('contact',[ContactController::class,'show'])->name('contact');