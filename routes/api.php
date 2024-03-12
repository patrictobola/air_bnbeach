<?php

use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\ListingController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TagController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bookings', BookingController::class);
Route::apiResource('listings', ListingController::class);
Route::apiResource('messages', MessageController::class);
Route::apiResource('photos', PhotoController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('tags', TagController::class);
