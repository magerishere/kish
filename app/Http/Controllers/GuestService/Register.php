<?php

namespace App\Http\Controllers\GuestService;

use App\Jobs\SendEmailVerificationJob;
use App\Models\User;
use Throwable;

class Register {
    public function __invoke($request)
    {
        try{
            $user = User::create($request->all());
            dispatch(new SendEmailVerificationJob($user));

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return app(Login::class)($request);
    }
}
