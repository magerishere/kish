<?php

namespace App\Http\Controllers;

use App\Jobs\InviteEmployeeJob;
use App\Jobs\SendSmsVerificationJob;
use App\Mail\InviteEmployeeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmployerController extends Controller
{
    public function search(Request $request)
    {
        try {
            $users = User::where('email','like','%' . $request->value . "%")->with('image')->get();

        } catch(Throwable $e) {
            return back()
                ->withError($e->getMessage());
        }
        return response()->json(['status'=>200,'users'=>$users]);
    }


    public function invite(Request $request)
    {
        $employerName = auth()->user()->meta->name;
        try {
            if(filter_var($request->emailOrPhone,FILTER_VALIDATE_EMAIL))
            {
                dispatch(new InviteEmployeeJob($request->emailOrPhone,$employerName,$request->employerId));
            } else {
                date_default_timezone_set("Asia/Tehran");

                // your mobile numbers
                $MobileNumbers = array($request->emailOrPhone);

                // $code = rand(100000,999999);

                // your text messages
                $Messages = array('سلام شما از طرف ' . $employerName . 'درخواست همکاری دارید در صورت تمایل وارد لینک زیر شوید'   . "        http://karekish.test/accept-invite-employer/" . encrypt($request->employerId));

                // sending date
                @$SendDateTime = date("Y-m-d")."T".date("H:i:s");

                dispatch(new SendSmsVerificationJob($MobileNumbers,$Messages,$SendDateTime));

            }
        } catch (Throwable $e) {
            return back()
                ->withError($e->getMessage());
        }
        return response()->json(['status'=>200]);

    }

    public function acceptInvite($id)
    {
        $employer = User::find(decrypt($id));
        if(Auth::check())
        {
            return Auth::id();
        }
        return view('guest.login',compact('employer'));
        /* -----------------------------
        // MOST BE COMPLETED ! ! ! ! ! !
        // -----------------------------
        */
    }
}
