<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [TicketController::class, 'getAllPublicTicketTransactions']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/', [TicketController::class, 'getAllPublicTicketTransactions'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


use App\Http\Controllers\UserTransactionController;
Route::post('user/transactions', [UserTransactionController::class, 'userTransactions'])
    ->name('user.transactions');


use App\Http\Controllers\TransactionController;

Route::get('add/transaction/{user_id}', [TransactionController::class, 'showAddTransactionForm'])
    ->name('add.transaction.form');
Route::post('add-transaction', [TransactionController::class, 'addTransaction'])
    ->name('add.transaction');

Route::get('user/transactions/{user_id}', [TransactionController::class, 'showUserTransactions'])
    ->name('user.transaction');

    Route::get('/', [TicketController::class, 'getAllPublicTicketTransactions'])->name('home');

    Route::get('/export-pdf', 'App\Http\Controllers\TransactionController@exportToPDF')->name('export.pdf');
