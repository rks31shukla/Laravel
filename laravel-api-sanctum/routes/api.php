<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('/student',function ()
// {
//    return 'All students info. '; 
// });

// public routes


// Route::get('/students',[StudentController::class,'index']);
// Route::get('/students/{id}',[StudentController::class,'show']);
// Route::get('/students/search/{city}',[StudentController::class,'search']);
// Route::post('/students',[StudentController::class,'store']);
// Route::put('/students/{id}',[StudentController::class,'update']);
// Route::delete('/students/{id}',[StudentController::class,'destroy']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// Protected routes

// Route::middleware(['auth:sanctum'])->group(function () {

//     Route::get('/students',[StudentController::class,'index']);
//     Route::get('/students/{id}',[StudentController::class,'show']);
//     Route::get('/students/search/{city}',[StudentController::class,'search']);
//     Route::post('/students',[StudentController::class,'store']);
//     Route::put('/students/{id}',[StudentController::class,'update']);
//     Route::delete('/students/{id}',[StudentController::class,'destroy']);
//     Route::post('/logout',[UserController::class,'logout']);
// });


// Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']);


//Partially Protected routes

// public 

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students/search/{city}', [StudentController::class, 'search']);

//Protected
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/students', [StudentController::class, 'store']);
    Route::put('/students/{id}', [StudentController::class, 'update']);
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/user',function (Request $req)
    {
        return $req->user();
    });
});



//all routes by single statement

// Route::resource('students',StudentController::class);


