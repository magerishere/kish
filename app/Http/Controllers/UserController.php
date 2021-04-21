<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserService\Update;
use App\Http\Requests\UserUpdateRequest;
use App\Models\ApiToken;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('users.dashboard',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();
        $genders = ['Male','Female'];
        return view('users.show',compact('user','genders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $genders = ['Male','Female'];
        $roles = Role::all();
        $permissions = Permission::all();

        return view('users.edit',compact('user','genders','roles','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request)
    {
        $user = auth()->user();

       return app(Update::class)($user,$request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function logout(Request $request)
    {
            auth()->user()->tokens()->delete();
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()
                ->route('guest.login')
                ->with('success','you successfuly logout');
    }

    public function notification()
    {
        $user = auth()->user();
        $notifications = DB::table('notifications')
                            ->where('notifiable_id',$user->id)
                            ->get();
        foreach($notifications as $notification)
        {
            DB::table('notifications')
                ->where('notifiable_id',$user->id)
                ->update([
                    'read_at' => now(),
                ]);
        }
        return view('users.notification',compact('notifications'));
    }

    public function delete_image($id)
    {
        $image = Image::where('imageable_id',$id)->first();
        if($image)
        {
            unlink(public_path() . $image->url);
            $image->delete();
        }
        return back()
            ->withSuccess('your profile image has been removed');
    }

}
