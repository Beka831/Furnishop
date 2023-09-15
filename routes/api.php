<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\v1\ClientController;
use App\Http\Controllers\API\v1\SellerController;
use App\Http\Controllers\API\v1\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/message', function(){
    return response()->json([
        'message' => 'Hello World!',
        'status' => 'Connected successfully',
        'status_code' => '200'
    ]);
});
//client
// done(works fine)
Route::post('clientregister', [ClientController::class, 'register']);
Route::get('clients', [ClientController::class, 'index']);
Route::put('clientupdate/{client}', [ClientController::class, 'update']);
Route::get('client/{client_id}', [ClientController::class, 'show']);
Route::delete('clientdelete/{client}', [ClientController::class, 'destroy']);
// under development
Route::post('clientlogin', [ClientController::class, 'login']);
Route::post('clientlogout', [ClientController::class, 'logout']);
//end of client

//seller
// done(works fine)
Route::post('sellerregister', [SellerController::class, 'register']);
Route::get('sellers', [SellerController::class, 'index']);
Route::put('sellerupdate/{seller}', [SellerController::class, 'update']);
Route::get('seller/{seller_id}', [SellerController::class, 'show']);
Route::delete('sellerdelete/{seller}', [SellerController::class, 'destroy']);
// under development
Route::post('sellerlogin', [SellerController::class, 'login']);
Route::post('sellerlogout', [SellerController::class, 'logout']);
//end of seller

//category
// done(works fine)
Route::post('categoryregister', [CategoryController::class, 'register']);
Route::get('categories', [CategoryController::class, 'index']);
Route::put('categoryupdate/{category}', [CategoryController::class, 'update']);
Route::get('category/{category_id}', [CategoryController::class, 'show']);
// under development
Route::delete('categorydelete/{category}', [CategoryController::class, 'destroy']);
//end of category

//for testing
Route::middleware('auth:api')->group( function() {
    Route::resource('products', ProductController::class);
});
//end of test