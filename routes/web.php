<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InspecController;
use App\Http\Controllers\RecapController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'guest'], function () {
    // Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
    // Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::get('/recapitulation', [RecapController::class, 'index'])->name('recapitulation');
Route::get('/recapitulation/add', [RecapController::class, 'create'])->name('recapitulation.create');
Route::get('/recapitulation/{area}', [RecapController::class, 'list'])->name('recapitulation.list');

Route::get('/inspection', [InspecController::class, 'index'])->name('inspection');
Route::get('/inspection/add', [InspecController::class, 'create'])->name('inspection.create');
Route::get('/inspection/{area}', [InspecController::class, 'list'])->name('inspection.list');