<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', [LoginController::class, 'loginPage'])->name('login');
Route::get('/login', [LoginController::class, 'loginPage']);
Route::post('/login', [LoginController::class, 'autentikasiLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('auth', 'userRole:admin')->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/', [AdminController::class, 'dashboard']);
    });
});
Route::middleware('auth', 'userRole:user')->group(function (){
    Route::prefix('user')->group(function (){
        Route::get('/', [UserController::class, 'dashboard']);
    });
});
