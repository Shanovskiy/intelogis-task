<?php

use App\Http\Controllers\DefaultOrderController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FastOrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[DeliveryController::class,"index"])->name("index");
Route::get('/fast-order',[FastOrderController::class,"fastOrder"])->name("fast-order");
Route::post('/fast-order',[FastOrderController::class,"calculation"])->name("fast-calculation");
Route::get('/default-order',[DefaultOrderController::class,"defaultOrder"])->name("default-order");
Route::post('/default-order',[DefaultOrderController::class,"calculation"])->name("default-calculation");

