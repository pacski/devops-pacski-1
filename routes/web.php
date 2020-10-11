<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


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

// Route::get('/','GeneralController@index')->middleware('auth')
//     ->name('pages.home.index');
Route::get('/', [GeneralController::class, 'index'])->middleware('auth')->name('pages.home.index');

Route::prefix('/product')->group(function (){
    Route::get('', [ProductController::class, 'index'])->name('pages.product.index');;
    Route::post('addProduct', [ProductController::class, 'create'])->name('pages.product.create');;
});

Route::prefix('/stock')->group(function (){
    Route::get('', [StockController::class, 'index'])->name('pages.stock.index');;
    Route::post('addStock', [StockController::class, 'create'])->name('pages.stock.create');;
});

Route::prefix('/fabric')->group(function (){
    Route::get('', [FabricController::class, 'index'])->name('pages.fabric.index');;
    Route::post('addFabric', [FabricController::class, 'create'])->name('pages.fabric.create');;
});

Route::prefix('/command')->group(function (){
    Route::get('', [CommandController::class, 'index'])->name('pages.command.index');;
    Route::post('addCommand', [CommandController::class, 'create'])->name('pages.command.create');;
    Route::post('update', [CommandController::class, 'updateStatus'])->name('pages.command.updateStatus');;
    Route::post('addComment', [CommandController::class, 'addComment'])->name('pages.command.addComment');;
    Route::post('delete', [CommandController::class, 'delete'])->name('pages.command.delete');;
});

Route::prefix('/my-account')->group(function (){
    Route::get('', [UserController::class, 'index'])->name('pages.user.index');;
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

// test vue js
Route::prefix('/user')->group(function (){
    Route::post('/create', 'UserController@create')
        ->name('users.create');
    Route::get('/index', 'UserController@index')
        ->name('users.index')
});