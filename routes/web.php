<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\PortfolioController;
use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\AdminControllers\ServiceController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

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



});
