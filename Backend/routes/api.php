<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/TODO GET NOGET DATA', [ContactRequestController::class, 'getAllContactRequest'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login']);
Route::delete('/logout', [AuthController::class, 'logout']);