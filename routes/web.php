<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return view('index');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/productUpload', function () {
    return view('productupload');
});
Route::get('/additional', function () {
    return view('booking');
});
Route::post('/homeImg',[userController::class,'homeImgUpload']);
Route::post('/doner',[userController::class,'doner']);
Route::post('/logger',[userController::class,'login']);
Route::post('/dishupload',[userController::class,'dishupload']);
Route::post('/home',[userController::class,'home']);
Route::post('/findfood',[userController::class,'findfood']);
