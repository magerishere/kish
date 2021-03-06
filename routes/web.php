<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TicketController;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/test',function() {

    return view('test');
});
Route::post('/test',function(Request $request) {
  
    return view('test');
})->name('test');

    Route::get('/',function(){
        return view('index');
    })->name('welcome');



    Route::get('/sms',function() {
        return view('sms');
    });


    Route::post('/sms', [SmsController::class,'trySendMessage'])->name('sendSms');
/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/

    Route::resource('user',UserController::class)->middleware(['auth']);
    Route::resource('admin', AdminController::class)->middleware(['auth','admin']);
    Route::resource('role',RoleController::class)->middleware(['auth','admin']);
    Route::resource('permission', PermissionController::class)->middleware(['auth','admin']);
    Route::resource('guest',GuestController::class)->middleware('guest');
    Route::resource('ticket', TicketController::class)->middleware('auth');
    Route::resource('chat', ChatController::class)->middleware('auth');
/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/
    Route::middleware(['auth','admin'])->group(function () {
        Route::post('/role/{id}/update/permissions',[RoleController::class,'updatePermissions'])->name('role.updatePermissions');
        Route::post('/user-list/{id}/role-permission-handler',[AdminController::class,'userListRolePermissionHandler']);
        Route::post('/role/search/permissions',[RoleController::class,'searchPermissions']);
    });

    Route::middleware(['auth', 'employer'])->group(function () {
        Route::post('/search-employee',[EmployerController::class,'search']);
        Route::post('/invite-employee',[EmployerController::class,'invite']);
    });

    Route::middleware('auth')->group(function () {

        Route::post('/logout',[UserController::class,'logout'])->name('user.logout');
        Route::post('/ticket-child',[TicketController::class,'childTicket'])->name('ticket.child');
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
        Route::get('/ticket/{id}/close',[TicketController::class,'closeTicket'])->name('ticket.close');
        Route::get('/ticket/{id}/open',[TicketController::class,'openTicket'])->name('ticket.open');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/notification',[UserController::class,'notification'])->name('user.notification');
        Route::get('/user/{id}/delete-image',[UserController::class,'delete_image'])->name('user.delete_image');
    });
    Route::middleware('guest')->group(function () {
        Route::get('/register',function(){
            return view('guest.register');
        })->name('guest.register');

        Route::get('/login',function(){
            return view('guest.login');
        })->name('guest.login');

    });

    Route::get('/setLanguage/{language}',function($language) {
        Session::put('language',$language);

        return redirect()->back();
    })->name('setLanguage');
    Route::get('/accept-invite-employer/{id}',[EmployerController::class,'acceptInvite']);
    Route::get('/user-setting',function() {
        return view('users.setting');
    })->name('user.setting');

/*
|--------------------------------------------------------------------------
| Email verification Routes
|--------------------------------------------------------------------------
*/

    Route::get('/email/verify', function () {

        $user = auth()->user();
        if($user->hasVerifiedEmail())
        {
            return view('users.dashboard',compact('user'));
        }
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
    Route::get('registrations/export_mapping', [DemoController::class, 'export_mapping'])->name('registrations.export_mapping');
    Route::get('importExportView', [DemoController::class,'importExportView']);
    Route::post('import', [DemoController::class,'import'])->name('import');
