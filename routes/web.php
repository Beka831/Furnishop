<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Controller;



Route::get('/', function () {
    return view('welcome');
});

// Route::controller(ClientController::class)->group (function(){
//     Route::get('/profile', 'show_profile')->name('show_profile');
//     Route::get('/edit', 'edit_profile')->name('edit_profile');
//     Route::put('/update', 'update_profile')->name('update_profile');
//     Route::post('/change-password', 'changePassword')->name('changePassword');
//     Route::put('/update-password', 'updatePassword')->name('updatePassword');
//     Route::post('/register', 'register')->name('register');

    // Route::post('/login', 'login')->name('login');
//     Route::get('/logout', 'logout')->name('logout');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/client', function () {
//     return view('client');
// });
