<?php

namespace App\Http\Controllers\GuestService;

use App\Jobs\SendEmailVerificationJob;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class Register {
    public function __invoke($request)
    {
        $user = User::create($request->all());
        dispatch(new SendEmailVerificationJob($user));
        return app(Login::class)($request);
    }
}
