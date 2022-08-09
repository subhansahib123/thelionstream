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

Route::get('/', function () {
    return view('home');
});
Route::get('/signup',[AuthenticationController::class,'signup']);
Route::get('/signin',[AuthenticationController::class,'signin']);

Route::post('/signup-store',[AuthenticationController::class,'signup_store'])->name('signup-store');
Route::post('/login',[AuthenticationController::class,'login'])->name('login');;