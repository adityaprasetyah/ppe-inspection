<?php

use App\Http\Controllers\AreaController;
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

    Route::post('/inspection/store', [InspecController::class, 'store'])->name('inspection.store');
    Route::get('/inspection/{area}/add', [InspecController::class, 'select_type'])->name('inspection.select.type');
    Route::get('/inspection/{area}/add/{type}', [InspecController::class, 'create'])->name('inspection.create');

    Route::post('/recapitulation/store', [RecapController::class, 'store'])->name('recapitulation.store');
    Route::get('/recapitulation/{area}/add', [RecapController::class, 'create'])->name('recapitulation.create');

    Route::get('/area', [AreaController::class, 'index'])->name('area');
    Route::get('/area/add', [AreaController::class, 'add'])->name('area.add');
    Route::post('/area', [AreaController::class, 'store'])->name('area.store');
    Route::delete('/area/{slug}', [AreaController::class, 'destroy'])->name('area.delete');
});

Route::group(['middleware' => 'guest'], function () {
    // Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
    // Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::get('/guide', [HomeController::class, 'guide'])->name('guide');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/recapitulation', [RecapController::class, 'index'])->name('recapitulation');
Route::get('/recapitulation/{id}/detail', [RecapController::class, 'show'])->name('recapitulation.detail');
Route::get('/recapitulation/{area}', [RecapController::class, 'list'])->name('recapitulation.list');

Route::get('/inspection', [InspecController::class, 'index'])->name('inspection');
Route::get('/inspection/{id}/detail', [InspecController::class, 'show'])->name('inspection.detail');
Route::get('/inspection/{area}', [InspecController::class, 'list'])->name('inspection.list');