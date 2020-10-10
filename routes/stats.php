<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StatsController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/year', [StatsController::class, 'statsYear'])->name('stats.year');

Route::get('/product/{product}', [StatsController::class, 'statsProduct'])->name('stats.product');
Route::get('/origin/{month}', [StatsController::class, 'statsOrigin'])->name('stats.origin');
Route::get('/bestProduct', [StatsController::class, 'statsBestProduct'])->name('stats.bestProduct');
Route::get('/keysFigures', [StatsController::class, 'keysFigures'])->name('stats.keysFigures');

// SERVICE

Route::prefix('/service')->group(function(){
    Route::get('/listingProduct', [StatsController::class, 'listProduct'])->name('list.product');
    Route::get('/months', [StatsController::class, 'getMonth'])->name('get.month');
});