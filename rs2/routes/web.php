<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminProfileController;
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
// Route::get('product/{p_name}',function($pname){
//     return view('product',['name'=>$pname]);
// })->where('p_name','[A-Za-z]+');

// Route :: get('about',[AboutController::class,'show']);
Route :: get('about/{name}',[AboutController::class,'show']);


Route:: get('admin',[AdminProfileController::class,'show']);