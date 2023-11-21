<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FeeController::class, 'index']);

Route::post('/saveFee', 
    [FeeController::class, 'saveFee']
)->name('saveFee');

Route::post('/finishedIt/{id}', 
    [FeeController::class, 'finishedIt']
)->name('finishedIt');