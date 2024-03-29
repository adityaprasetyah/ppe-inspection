<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InspecController;
use App\Http\Controllers\PpeController;
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


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/inspection', [InspecController::class, 'index'])->name('inspection');
    Route::get('/inspection/{area}', [InspecController::class, 'list'])->name('inspection.list');
    Route::post('/inspection/store', [InspecController::class, 'store'])->name('inspection.store');
    Route::get('/inspection/{area}/add', [InspecController::class, 'select_type'])->name('inspection.select.type');
    Route::get('/inspection/{area}/add/{type}', [InspecController::class, 'create'])->name('inspection.create');
    Route::get('/inspection/{id}/detail', [InspecController::class, 'show'])->name('inspection.detail');

    Route::get('/recapitulation', [RecapController::class, 'index'])->name('recapitulation');
    Route::put('/recapitulation/history/add', [RecapController::class, 'addToHistory'])->name('recapitulation.history.add');
    Route::get('/recapitulation/history', [RecapController::class, 'history'])->name('recapitulation.history');
    Route::get('/recapitulation/{area}', [RecapController::class, 'list'])->name('recapitulation.list');
    Route::post('/recapitulation/store', [RecapController::class, 'store'])->name('recapitulation.store');
    Route::get('/recapitulation/{area}/add', [RecapController::class, 'create'])->name('recapitulation.create');
    Route::get('/recapitulation/{id}/detail', [RecapController::class, 'show'])->name('recapitulation.detail');
    
    Route::get('/ppe/edit', [PpeController::class, 'edit'])->name('ppe.edit');
    Route::put('/ppe/update', [PpeController::class, 'update'])->name('ppe.update');

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
