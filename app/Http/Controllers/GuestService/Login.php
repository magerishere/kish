<?php

namespace App\Http\Controllers\GuestService;

use Illuminate\Support\Facades\Auth;
use Throwable;

class Login {
    public function __invoke($request)
    {
        try{
            if(Auth::attempt($request->except('_token')))
            {
                return redirect()
                    ->route('user.index')
                    ->with('success','you logged succesfuly');
            }

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return back()
            ->with('error','email or password was wrong!');
    }
}
