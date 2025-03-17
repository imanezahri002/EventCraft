<?php

use App\Http\Controllers\AuthController;
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
Route::get('/signup',function(){
    return view('signup');
});
Route::get('/signin',function(){
    return view('signin');
});
Route::post('/signup',[AuthController::class,'register'])->name('signup');
Route::post('/signin',[AuthController::class,'login'])->name('signin');

Route::get('/', function () {
    return view('welcome');
});
