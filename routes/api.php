<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\BuyerController;
use App\Http\Controllers\API\SellerController;
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

//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);



Route::group(['middleware'=>['auth:sanctum', 'ability:admin']],function(){
    Route::get('orders', [AdminController::class, 'getAllOrders']);
    Route::post('user/deactivated', [AdminController::class, 'DeactivatedUser']);
    Route::post('order/delete', [AdminController::class, 'deleteOrder']);
});
Route::group(['middleware'=>['auth:sanctum', 'ability:buyer']],function(){
    Route::post('buyer/order', [BuyerController::class, 'getAllBuyerOrder']);
    Route::post('buyer/order/detail', [BuyerController::class, 'getDetailBuyerOrder']);
    Route::post('buyer/order/checkout', [BuyerController::class, 'checkoutBuyer']);
});
Route::group(['middleware'=>['auth:sanctum', 'ability:seller']],function(){
    Route::post('seller/order', [SellerController::class, 'getAllSellerOrder']);
    Route::post('seller/order/confirm', [SellerController::class, 'confirmSeller']);
});

