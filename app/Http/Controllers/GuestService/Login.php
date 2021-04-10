<?php

namespace App\Http\Controllers\GuestService;

use Illuminate\Support\Facades\Auth;

class Login {
    public function __invoke($request)
    {
        if(Auth::attempt($request->except('_token')))
        {
            return redirect()
                ->route('user.index')
                ->with('success','you logged succesfuly');
        }
        return back()
            ->with('error','email or password was wrong!');
    }
}
