<?php

use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register_seller', function () {
    return view('seller.sellerRegister');
})->name('registerS');
// Route::post('/register_seller', [CreateNewUser::class, 'createSeller'])->name('registerSeller');
Route::post('/register_seller', function () {
    $createNewUser = new CreateNewUser();
    return $createNewUser->createSeller(Request::capture());
})->name('registerSeller');
Route::get('/seller/home', function () {
    return view('seller.home');
})->name('seller.home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 route::get('/redirect',[HomeController::class,'redirect']);

 route::get('/view_catagory',[AdminController::class,'view_catagory']);

 route::post('/add_catagory',[AdminController::class,'add_catagory']);

 route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);

 route::get('/view_product',[AdminController::class,'view_product']);

 route::post('/add_product',[AdminController::class,'add_product']);

 route::get('/show_product',[AdminController::class,'show_product']);
 
 route::post('/add_seller',[SellerController::class,'add_seller']);
