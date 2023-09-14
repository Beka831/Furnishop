<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;



Route::get('/', function () {
    return view('client');
});

// Route::group(['prefix' => 'client'], function(){
//     Route::get('/profile', 'ClientController@show_profile')->name('client.profile');
//     Route::get('/edit', 'ClientController@edit_profile')->name('client.edit');
//     Route::post('/update', 'ClientController@update_profile')->name('client.update');
//     Route::post('/change-password', 'ClientController@changePassword')->name('client.change-password');
//     Route::post('/update-password', 'ClientController@updatePassword')->name('client.update-password');
//     Route::get('/register', 'ClientController@register')->name('client.register');

//     Route::post('/login', 'ClientController@login')->name('client.login');
//     Route::get('/logout', 'ClientController@logout')->name('client.logout');
// });


Route::controller(ClientController::class)->group (function(){
    Route::get('/profile', 'show_profile')->name('show_profile');
    Route::get('/edit', 'edit_profile')->name('edit_profile');
    Route::post('/update', 'update_profile')->name('update_profile');
    Route::post('/change-password', 'changePassword')->name('changePassword');
    Route::post('/update-password', 'updatePassword')->name('updatePassword');
    Route::post('/register', 'register')->name('register');

    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/client', function () {
    return view('client');
});
// Route::group(['prefix'=> 'seller'], function(){
//     Route::get('/profile', 'SellerController@showProfile')->name('seller.profile');
//     Route::get('/edit', 'SellerController@edit')->name('seller.edit');
//     Route::post('/update', 'SellerController@update')->name('seller.update');
//     Route::get('/change-password', 'SellerController@changePassword')->name('seller.change-password');
//     Route::post('/update-password', 'SellerController@updatePassword')->name('seller.update-password');
// });