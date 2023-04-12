<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReceiveItemsController;
use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\SellController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/receive-items', [ReceiveItemsController::class, 'index']);
Route::post('/receive-items', [ReceiveItemsController::class, 'store']);

Route::get('/sell', [SellController::class, 'index']);
Route::post('/sell', [SellController::class, 'store']);

Route::get('/purchase-history', [PurchaseHistoryController::class, 'index']);
Route::get('/inventory', [HomeController::class, 'inventory']);

// Path: Advanced-Db\app\Http\Controllers\HomeController.php