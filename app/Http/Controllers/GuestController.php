<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GuestService\Login;
use App\Http\Controllers\GuestService\Register;
use Illuminate\Http\Request;


class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return app(Login::class)($request);
    }

    public function register(Request $request)
    {
        return app(Register::class)($request);
    }

}
