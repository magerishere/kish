<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/

    Route::resource('user',UserController::class)->middleware('auth');
    Route::resource('admin', AdminController::class)->middleware(['auth','admin']);
    Route::resource('guest',GuestController::class)->middleware('guest');
/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

    Route::middleware('auth')->group(function () {
        Route::post('/logout',[UserController::class,'logout'])->name('user.logout');
        Route::post('/role-user-handler',[AdminController::class,'roleUserHandler'])->name('admin.roleUserHandler');
    });

    Route::middleware('guest')->group(function () {
        Route::post('/register',[GuestController::class,'register'])->name('guest.register');
        Route::post('/login',[GuestController::class,'login'])->name('guest.login');
    });




/*
|--------------------------------------------------------------------------
| Get Routes
|--------------------------------------------------------------------------
*/

    Route::middleware('guest')->group(function () {
        Route::get('/register',function(){
            return view('guest.register');
        })->name('guest.register');

        Route::get('/login',function(){
            return view('guest.login');
        })->name('guest.login');

    });




