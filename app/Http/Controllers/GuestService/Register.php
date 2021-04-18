<?php

namespace App\Http\Controllers\GuestService;

use App\Models\User;
use App\Models\UserMeta;
use App\Models\VerificationCode;

use Throwable;

class Register {
    public function __invoke($request)
    {
        try{

            $phone = VerificationCode::where('phone_number',$request->phone_number)->first();
            if($phone->code == $request->verification_code)
            {
                $user = User::create($request->only('phone_number','email'));
                UserMeta::create([
                    'user_id' => $user->id,
                    'name' => $request->name,
                    'gender' => $request->gender,
                ]);
                // dispatch(new SendEmailVerificationJob($user));

                return app(Login::class)($request);

            }

        } catch(Throwable $e) {
            return response()->json(['verification_code_is_wrong'=>400]);

        }
    }
}
