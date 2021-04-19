<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
    Route::resource('tickets', TicketController::class);
    Route::resource('permissions', PermissionController::class);
});
