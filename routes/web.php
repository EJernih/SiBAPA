<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BhpController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BhpRequestController;
use App\Http\Controllers\BhpRequestDetailController;
use App\Http\Controllers\InTransactionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::view('/example-page','example-page');
Route::view('/example-auth','example-auth');

Route::resource('bhps', BhpController::class);
Route::resource('units', UnitController::class);
Route::resource('bhpRequests', BhpRequestController::class);
Route::resource('detailRequests', BhpRequestDetailController::class);
Route::resource('inTransactions', InTransactionController::class);
