<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexComtroller;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
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

//one to one  and inverse in one to one

Route::get('addcustomer',[CustomerController::class,'addCustomer']);
Route::get('showMobile/{id}',[CustomerController::class,'showMobile']);
Route::get('getCustomer/{id}',[MobileController::class,'getCustomer']);


//one to many  and inverse in one to many
Route::get('add_author',[AuthorController::class,'add_author']);
Route::get('add_post/{id}',[PostController::class,'add_post']);
Route::get('show_post/{id}',[PostController::class,'show_post']);
Route::get('get_author/{id}',[AuthorController::class,'get_author']);

Route::get('index/{id}',[IndexComtroller::class,'index']);


//has one through
Route::get('add_mechanic',[MechanicController::class,'add_mechanic']);
Route::get('add_car/{id}',[CarController::class,'add_car']);
Route::get('add_owner/{id}',[OwnerController::class,'add_owner']);
Route::get('show_owner/{id}',[OwnerController::class,'show_owner']);