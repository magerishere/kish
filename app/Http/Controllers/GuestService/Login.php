<?php

namespace App\Http\Controllers\GuestService;

use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;

use Throwable;

class Login {
    public function __invoke($request)
    {
        try{
            if($request->has('password'))
            {

                $user = User::where('email',$request->email)->first();
                if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
                {
                    $request->session()->regenerate();
                    return response()->json(['status'=>200,'json'=>'json']);

                }
                return response()->json(['status'=>400,'request'=>$request->all(),'user'=> bcrypt($user->password)]);
            }

            $user = User::where('phone_number',$request->phone_number)->first();
            $verifyCode = VerificationCode::where('code',$request->verification_code)->first();

            if($user && $verifyCode)
            {
                Auth::loginUsingId($user->id);
                return response()->json(['status'=>200]);

            }

        } catch(Throwable $e) {
            return response()->json(['status'=>400]);

        }

    }
}
