<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/ecommerce', function () {
    return view('home');
});
Route::get('/signup/{sponsur}',[AuthenticationController::class,'signup']);
Route::get('/signin',[AuthenticationController::class,'signin']);


Route::post('/login',[AuthenticationController::class,'login'])->name('login');;

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/', function () {
    return view('admin.index');
});

