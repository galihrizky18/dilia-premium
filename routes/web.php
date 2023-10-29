<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'loginPage']);
Route::get('/login', [LoginController::class, 'loginPage']);
Route::post('/login', [LoginController::class, 'autentikasiLogin']);

Route::middleware('auth', 'userRole:admin')->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/', [AdminController::class, 'dashboard']);
    });
});
