<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        $usersMeta = UserMeta::all();
        // count for charts
        $total = $users->count();
        $female = $usersMeta->where('gender',1)->count();
        $male = $usersMeta->where('gender',0)->count();
        $avgYear = $usersMeta->avg('year');
        
        return view('admin.index',compact('total','female','male','avgYear'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function roleUserHandler(Request $request)
    {

        DB::table('role_user')
            ->where(['user_id'=>$request->user_id])
            ->update(['privilages'=>$request->role_id]);

        return back()
            ->with('success','User has been updated!');
    }

    //Show specific user for update roles and permissions
    public function userList($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.show',compact('user','roles','permissions'));
    }

    // Show all users in site
    public function usersList()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }


    public function userListRolePermissionHandler(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->syncRoles($request->roleIds);
        $user->syncPermissions($request->permissionIds);

    }
}
