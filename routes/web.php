<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\BhpController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BhpRequestController;
use App\Http\Controllers\BhpRequestDetailController;
use App\Http\Controllers\InTransactionController;
use App\Http\Controllers\OutTransactionController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Route::middleware(['role:teknisi'])->group(function () {
//     Route::get('/teknisi/dashboard', function () {
//         return view('teknisi.dashboard');
//     })->name('teknisi.dashboard');
// });


Route::view('/example-page','example-page');
Route::view('/example-auth','example-auth');
Route::view('/coba','coba');

Route::resource('prodis', ProdiController::class);
Route::resource('labs', LabController::class);
Route::resource('bhps', BhpController::class);
Route::get('/detail_bhps', [BhpController::class, 'detail'])->name('bhp.detail');

Route::resource('units', UnitController::class);
Route::resource('bhpRequests', BhpRequestController::class);
Route::resource('detailRequests', BhpRequestDetailController::class);
Route::resource('inTransactions', InTransactionController::class);
Route::resource('outTransactions', OutTransactionController::class);
Route::resource('transactions', TransactionController::class);
