<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EpisodeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthenticationController::class, 'login'])->name('loginPage')->middleware('guest');

Route::get('/register', [AuthenticationController::class, 'registerPage'])->name('registerPage')->middleware('guest');

Route::post('/authenticate', [AuthenticationController::class, 'authenticate'])->name('authenticateUser');

Route::post('/register-user', [AuthenticationController::class, 'register'])->name('register');

Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

//Route::middleware(['role:Admin ||company'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

//});

Route::resource('/companies', CompaniesController::class);
Route::resource('/episodes', EpisodeController::class);

// Route::get('/reset-password', function () {
//     return view('pages.forgotPassword');
// });
