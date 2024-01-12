<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\API\IndividualController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', [CustomerController::class, 'getCustomers']);
Route::get('/customer/{id}', [CustomerController::class, 'getCustomer']);
Route::post('/customer', [CustomerController::class, 'createCustomer']);
Route::put('/customer/{id}', [CustomerController::class, 'updateCustomer']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/home-insurance', [CustomerController::class, 'homeInsurance']);
    Route::post('/individual-insurance', [IndividualController::class, 'individualInsurance']);
});
