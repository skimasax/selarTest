<?php

use App\Http\Controllers\APP\V1\FxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::post('get-store-rate', [FxController::class, 'getStoreRate']);
Route::post('get-payout-rate', [FxController::class, 'getPayoutRate']);
