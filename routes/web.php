<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Balance;
use App\Http\Livewire\Transactions\ChecksControl\Index as ChecksControlIndex;
use App\Http\Livewire\Transactions\ChecksControl\Edit as ChecksControlEdit;
use App\Http\Livewire\Transactions\Expenses\Index as ExpensesIndex;
use App\Http\Livewire\Transactions\Expenses\Create as ExpensesCreate;
use App\Http\Livewire\Transactions\Checks\Index as ChecksIndex;
use App\Http\Livewire\Transactions\Checks\Create as ChecksCreate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/', Balance::class)->name('balance');
    Route::prefix('transactions')->group(function () {
        Route::get('/expenses', ExpensesIndex::class)->name('expenses.index');
        Route::get('/expenses/create', ExpensesCreate::class)->name('expenses.create');
        Route::get('/checks', ChecksIndex::class)->name('checks.index');
        Route::get('/checks/create', ChecksCreate::class)->name('checks.create');
    });
    Route::prefix('checks-control')->group(function () {
        Route::get('/', ChecksControlIndex::class)->name('checks-control.index');
        Route::get('/edit/{id}', ChecksControlEdit::class)->name('checks-control.edit');
    });
});
