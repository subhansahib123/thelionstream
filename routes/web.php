<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserManagementController;

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
//Admin Routes

Route::get('/admin/add_user',[UserManagementController::class,'AddUser'])->name('admin.add_user');
Route::post('/admin/store_user',[UserManagementController::class,'StoreUser'])->name('admin.store_user');

Route::get('/admin/active_users',[UserManagementController::class,'ActiveUser'])->name('admin.active_users');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::get('/', function () {
    return view('admin.index');
});

