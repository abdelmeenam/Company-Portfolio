<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers\AdminHomeController;
use App\Http\Controllers\AdminControllers\ServiceController;

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
});