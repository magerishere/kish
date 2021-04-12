<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DemoController;
use App\Models\User;
use App\Notifications\UserNotification;
use Facade\Ignition\Exceptions\ViewExceptionWithSolution;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/

    Route::resource('user',UserController::class)->middleware(['auth','verified']);
    Route::resource('admin', AdminController::class)->middleware(['auth','admin']);
    Route::resource('role',RoleController::class)->middleware(['auth','admin']);
    Route::resource('permission', PermissionController::class)->middleware(['auth','admin']);
    Route::resource('guest',GuestController::class)->middleware('guest');
/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/
    Route::middleware(['auth','admin'])->group(function () {
        Route::post('/role/{id}/update/permissions',[RoleController::class,'updatePermissions'])->name('role.updatePermissions');
        Route::post('/user-list/{id}/role-permission-handler',[AdminController::class,'userListRolePermissionHandler']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout',[UserController::class,'logout'])->name('user.logout');
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


    Route::middleware(['auth','admin'])->group(function () {
        Route::get('/users-list',[AdminController::class,'usersList'])->name('admin.usersList');
        Route::get('/user-list/{id}',[AdminController::class,'userList'])->name('admin.userList');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/notification',[UserController::class,'notification'])->name('user.notification');
    });
    Route::middleware('guest')->group(function () {
        Route::get('/register',function(){
            return view('guest.register');
        })->name('guest.register');

        Route::get('/login',function(){
            return view('guest.login');
        })->name('guest.login');

    });





/*
|--------------------------------------------------------------------------
| Email verification Routes
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



/*
|--------------------------------------------------------------------------
| Import Excel Routes
|--------------------------------------------------------------------------
*/
    Route::get('export', [DemoController::class,'export'])->name('export');
    Route::get('registrations/export_mapping', [DemoController::class, 'export_mapping'])->name('registrations.export_mapping') ;
    Route::get('importExportView', [DemoController::class,'importExportView']);
    Route::post('import', [DemoController::class,'import'])->name('import');




