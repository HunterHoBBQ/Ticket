<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [TicketController::class, 'getAllPublicTicketTransactions']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/', [TicketController::class, 'getAllPublicTicketTransactions'])->name('logout');
// Route::get('user/details', [TicketController::class, 'userDetails'])->name('user.details')->middleware('auth');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

use App\Http\Controllers\UserTransactionController;

Route::post('user/transactions', [UserTransactionController::class, 'userTransactions'])->name('user.transactions');


