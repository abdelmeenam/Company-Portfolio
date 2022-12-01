<?php

use App\Http\Controllers\AdminControllers\AuthController;
use App\Http\Controllers\AdminControllers\ContactController;
use App\Http\Controllers\UserControllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\PortfolioController;
use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\AdminControllers\ServiceController;
use App\Http\Controllers\AdminControllers\TeamController;
use App\Http\Controllers\AdminControllers\AboutController;



//--------------------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('message.send');

Route::get('/admin/login', [AuthController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.postLogin');
//--------------------------------------------------------------------------
Route::group(['prefix' => 'admin', 'as' => 'admin.' ,'middleware' => 'auth'], function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('all');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::delete('/delete', [ServiceController::class, 'delete'])->name('delete');
        Route::get('/edit/{service_id}', [ServiceController::class, 'edit'])->name('edit');
        Route::put('/update', [ServiceController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'portfolio', 'as' => 'portfolio.'], function () {
        Route::get('/', [PortfolioController::class, 'index'])->name('all');
        Route::get('/create', [PortfolioController::class, 'create'])->name('create');
        Route::post('/store', [PortfolioController::class, 'store'])->name('store');
        Route::delete('/delete', [PortfolioController::class, 'delete'])->name('delete');
        Route::get('/edit/{portfolio_id}', [PortfolioController::class, 'edit'])->name('edit');
        Route::put('/update', [PortfolioController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'team', 'as' => 'team.'], function () {
        Route::get('/', [TeamController::class, 'index'])->name('all');
        Route::get('/create', [TeamController::class, 'create'])->name('create');
        Route::post('/store', [TeamController::class, 'store'])->name('store');
        Route::delete('/delete', [TeamController::class, 'delete'])->name('delete');
        Route::get('/edit/{portfolio_id}', [TeamController::class, 'edit'])->name('edit');
        Route::put('/update', [TeamController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/', [AboutController::class, 'index'])->name('all');
        Route::get('/create', [AboutController::class, 'create'])->name('create');
        Route::post('/store', [AboutController::class, 'store'])->name('store');
        Route::delete('/delete', [AboutController::class, 'delete'])->name('delete');
        Route::get('/edit/{about_id}', [AboutController::class, 'edit'])->name('edit');
        Route::put('/update', [AboutController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('all');
        Route::post('/store', [ContactController::class, 'store'])->name('store');
        Route::delete('/delete', [ContactController::class, 'delete'])->name('delete');
    });

});
