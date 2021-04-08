<?php

namespace App\Http\Controllers;

use App\Events\UserHandlerEvent;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Image;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;


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
        //if roleId == 1 means user is admin
        $roleId = auth()->user()->role->first()->id;
        return view('users.dashboard',compact('user','roleId'));
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
    public function show(User $user)
    {
        $genders = ['Male','Female'];
        return view('users.show',compact('user','genders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        // event(new UserHandlerEvent($request,$user));

        // Image update handler
        if($file = $request->file('image'))
        {
            $file->store('public/images');
            if($user->image)
            {

                Image::where('imageable_id',$user->id)
                    ->update(['url'=>$file->hashName()]);
            } else {
                Image::create([
                    'url' => $file->hashName(),
                    'imageable_id' => $user->id,
                    'imageable_type' => "User",
                    ]);
            }
        }

        // User meta update handler
        if($user->meta)
        {
            UserMeta::where('user_id',$user->id)
                ->update($request->except(['image','_token',"_method"]));
        } else {
            UserMeta::create($request->except('url'));
        }

        return back()
            ->with('success','Your profile has been updated');
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
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()
                ->route('guest.login')
                ->with('success','you successfuly logout');
    }

}
