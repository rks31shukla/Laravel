<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'index'])->name('index');

Route::post('/',[StudentController::class,'create'])->name('create');

Route::get('/editform/{id}',[StudentController::class,'edit'])->name('editform');
Route::put('/editform/{id}',[StudentController::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');