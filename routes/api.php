<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\v1\ClientController;

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

// done(works fine)
Route::post('clientregister', [ClientController::class, 'register']);
Route::get('clients', [ClientController::class, 'index']);
Route::put('clientupdate/{client}', [ClientController::class, 'update']);
Route::get('client/{client_id}', [ClientController::class, 'show']);
//

// under development
Route::post('clientlogin', [ClientController::class, 'login']);
Route::post('clientlogout', [ClientController::class, 'logout']);
//



//for testing
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);


Route::middleware('auth:api')->group( function() {
    Route::resource('products', ProductController::class);
});
//end of test