<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_camp',[AdminController::class,'add_camp']);

Route::post('/upload_camp',[AdminController::class,'upload_camp']);

Route::get('/delete_camp',[AdminController::class,'delete_camp']);

Route::get('/deleting/{id}',[AdminController::class,'deleting']);

Route::get('/camp',[Homecontroller::class,'camp']);

Route::get('/schemes',[HomeController::class,'schemes']);

Route::get('/add_category',[AdminController::class,'add_category']);

Route::post('/upload_category',[AdminController::class,'upload_category']);

Route::get('/delete_category',[AdminController::class,'delete_category']);

Route::get('/add_scheme',[AdminController::class,'add_scheme']);
