<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
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

    public function register(GuestRegister $request)
    {
        $user = User::create($request->all());
        DB::table('role_user')->insert(['user_id'=>$user->id]);
        return back()
            ->with('success','your register was successfuly!');
    }

}
