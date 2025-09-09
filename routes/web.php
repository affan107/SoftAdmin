<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthenticationController::class, 'login'])->name('loginPage');

Route::get('/register', [AuthenticationController::class, 'register'])->name('registerPage');

Route::post('/authenticateUser', [AuthenticationController::class, 'authenticate'])->name('authenticateUser');

Route::post('/registerUser', [AuthenticationController::class, 'registerUser'])->name('registerUser');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
