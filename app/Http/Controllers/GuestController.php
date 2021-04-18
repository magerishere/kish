<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GuestService\Login;
use App\Http\Controllers\GuestService\Register;
use App\Http\Requests\GuestRegisterRequest;
use App\Http\Requests\trySendMessageRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(trySendMessageRequest $request)
    {
        return app(Login::class)($request);
    }

    public function register(GuestRegisterRequest $request)
    {
        $validator = Validator::make($request->all(),[GuestRegisterRequest::class]);
        if($validator->fails())
        {
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        }
        return app(Register::class)($request);
    }

}
