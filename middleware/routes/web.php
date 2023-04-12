<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
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
});

Route::view('dashboard','dashboard');
Route::view('stock','stock');
Route::view('stock','stock')->middleware('stockmdlware');
Route::get('report',[ReportController::class,'show']);
