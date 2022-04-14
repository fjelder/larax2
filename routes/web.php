<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
 
    Route::get('/', [ContractController::class, 'last'])->name('home');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::resources([
        'contract' => ContractController::class,
    ]);
});
