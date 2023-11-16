<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OplataController;

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

Route::get('/', [OplataController::class, 'index']);

Route::post('/saveOplata', 
    [OplataController::class, 'saveOplata']
)->name('saveOplata');

Route::post('/finishedIt/{id}', 
    [OplataController::class, 'finishedIt']
)->name('finishedIt');