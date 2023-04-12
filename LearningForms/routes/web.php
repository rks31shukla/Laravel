<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\ErrorsController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\FormRequestController;
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

Route::get('/',[RegistrationController::class,'showForm']);
Route::post('/',[RegistrationController::class,'signup']);


Route::get('validationForm',[ValidationController::class,'showForm']);
Route::post('validationForm',[ValidationController::class,'signup']);

Route::get('errorForm',[ErrorsController::class,'showForm']);
Route::post('errorForm',[ErrorsController::class,'signup']);

Route::get('customRules',[CustomController::class,'showForm']);
Route::post('customRules',[CustomController::class,'signup']);

Route::get('formRequestValidation',[FormRequestController::class,'showForm']);
Route::post('formRequestValidation',[FormRequestController::class,'signup']);


Route::view('oldData','oldData')->name('old');