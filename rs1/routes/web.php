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

// Route::view('about','about');

Route::get('/', function () {
    return view('welcome');
});

Route::get('abt',function(){
    return view('about');
});

// Route::get('/contactme', function () {
//     return view('contactme',['name'=>'Ramakant']);
// });
// Route::get('/contactme', function () {
//     return view('contactme')->with('name','Rk');});
Route::view('/contactme','contactme',['name'=>'Rk','id'=>'1']);

Route::get('user/{u_id}', function ($uid) {
    return $uid;
});

// Note these parameters are compulsory
//gives 404 Error if not given
Route::get('post/{post_id}/comment/{com_id}', function ($pid,$cid) {
    return "post : ".$pid."\ncomment : ".$cid;
});
// To make parameter optional
Route::get('post/{post_id}/commen1t/{com_id?}', function ($pid,$cid=null  ) {
    return "post : ".$pid."\ncomment : ".$cid;
});

//Provide RegEx for constraints

Route::get('product/{p_id}',function($pid){
    return $pid;
})->where('p_id','[A-Za-z]+');

//Provide multiple RegEx for constraints
Route::get('manager/{id}/{name}',function($id,$name){
    return $id.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

Route::redirect('yaha','waha');
Route::redirect('yaha','waha',301);
Route::permanentRedirect('yaha5','waha');

Route::fallback(function(){
    return 'bye';
});