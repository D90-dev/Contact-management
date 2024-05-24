<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contact/create', [ContactController::class, 'store']);
Route::get('/contact/{id}', [ContactController::class, 'show']);
Route::put('/contact/update/{id}', [ContactController::class, 'update']);
Route::delete('/contact/delete/{id}', [ContactController::class, 'destroy']);

