<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiCommandController;
use App\Http\Controllers\API\ApiStockController;
use App\Http\Controllers\API\ApiFabricController;
use App\Http\Controllers\API\ApiProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/command')->group(function(){
    Route::get('/', [ApiCommandController::class, 'index'])->name('api.commands.index');
    Route::post('/{number}/{status}', [ApiCommandController::class, 'changeStatus'])->name('api.commands.change-status');
});
Route::prefix('/stock')->group(function(){
    Route::get('/', [ApiStockController::class, 'index'])->name('api.stocks.index');
    Route::post('/addStock', [ApiStockController::class, 'addStock'])->name('api.stocks.addStock');
    Route::post('/delete/{id}', [ApiStockController::class, 'delete'])->name('api.stocks.delete');
    Route::get('/getAllType', [ApiStockController::class, 'getAllType'])->name('api.stocks.getAllType');
});
Route::prefix('/fabric')->group(function(){
    Route::get('/', [ApiFabricController::class, 'index'])->name('api.fabrics.index');
    Route::post('/delete/{id}', [ApiFabricController::class, 'delete'])->name('api.fabrics.delete');
});
Route::prefix('/product')->group(function(){
    Route::get('/', [ApiProductController::class, 'index'])->name('api.products.index');
    Route::get('/countProduct/{name}', [ApiProductController::class, 'nbProduced'])->name('api.products.nbProduced');
});