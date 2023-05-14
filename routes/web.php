<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/usuario',[UsuarioController::class,'index'])->name('usuarios.index');

Route::get('/empresa',[EmpresaController::class,'index'])->name('empresas.index');
Route::get('/empresa/create',[EmpresaController::class,'create'])->name('empresas.create');
Route::post('/empresa/store',[EmpresaController::class,'store'])->name('empresas.store');

Route::get('/sucursal',[SucursalController::class,'index'])->name('sucursales.index');
Route::get('sucursal/create',[SucursalController::class,'create'])->name('sucursales.create');
Route::post('/sucursal/store',[SucursalController::class,'store'])->name('sucursales.store');

