<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleMetaController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/

    Route::resource('user',UserController::class)->middleware(['auth','verified']);
    Route::resource('admin', AdminController::class)->middleware(['auth','admin']);
    Route::resource('role', RoleController::class)->middleware(['auth','admin']);
    Route::resource('guest',GuestController::class)->middleware('guest');
/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/


    Route::middleware('auth')->group(function () {
        Route::post('/logout',[UserController::class,'logout'])->name('user.logout');
        Route::post('/role-user-handler',[AdminController::class,'roleUserHandler'])->name('admin.roleUserHandler');
        Route::post('/role-privilage/{id}',[RoleController::class,'rolePrivilage'])->name('role.privilage');
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



        Route::get('/email/verify', function () {
            return view('auth.verify-email');
        })->middleware('auth')->name('verification.notice');

        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();

            return redirect('/user');
        })->middleware(['auth', 'signed'])->name('verification.verify');

        Route::post('/email/verification-notification', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();

            return back()->with('message', 'Verification link sent!');
        })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    Route::middleware('guest')->group(function () {
        Route::get('/register',function(){
            return view('guest.register');
        })->name('guest.register');

        Route::get('/login',function(){
            return view('guest.login');
        })->name('guest.login');

    });




