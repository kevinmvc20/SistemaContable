<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/',[LoginController::class,'store']);

Route::get('/register',[RegisterController::class,'index'] )->name('register');
Route::post('/register',[RegisterController::class,'store'] );

Route::post('/logout',[LogoutController::class,'store'])->name('logout');
