<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DemoController;
use App\Http\Controllers\Backend\LoginController;
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

// Route::get('/', function () {
//     return view('frontend.app');
// });

// Route::get('/service', function () {
//     return view('livewire.backend.layouts.service.service');
// });

Route::get('/', \App\Http\Livewire\Home::class);
Route::get('/service', \App\Http\Livewire\Service::class);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login',[LoginController::Class,'index'])->name('login');
    Route::get('/register',[LoginController::Class,'register'])->name('register');
    Route::post('/user-login',[LoginController::Class,'login'])->name('user.login');
    Route::post('/user-store',[LoginController::Class,'store'])->name('user.store');
});

Route::group(['middleware' => 'auth'], function () {
    //dashboard routes...
    Route::get('/dashboard',[DashboardController::Class,'index'])->name('dashboard');

    //category routes...
    Route::get('/categories',[CategoryController::Class,'index'])->name('categories');
    Route::post('/category-store',[CategoryController::Class,'store'])->name('category.add');
    Route::post('/category-update',[CategoryController::Class,'update'])->name('category.update');

    //demo routes...
    Route::get('/demos',[DemoController::Class,'index'])->name('demos');
    Route::post('/demo-store',[DemoController::Class,'store'])->name('demo.add');
    Route::post('/demo-update',[DemoController::Class,'update'])->name('demo.update');

});

