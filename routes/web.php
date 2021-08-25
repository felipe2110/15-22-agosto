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

///listado Usuarios
Route::redirect('/','users');
Route::get('users',[userController::class,'index'])->name('users.index');
Route::get('users/create',[userController::class,'create'])->name('users.create');
Route::get('users/{id}',[userController::class,'show'])->name('users.show');
Route::post('users',[userController::class,'store'])->name('users.store');
Route::delete('users/{id}',[userController::class,'destroy'])->name('users.destroy');
Route::get('users/edit/{id}',[userController::class,'edit'])->name('users.edit');
Route::put('users/{id}',[userController::class,'update'])->name('users.update');
