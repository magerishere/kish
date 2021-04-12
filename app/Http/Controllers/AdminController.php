<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminService\Index;
use App\Http\Controllers\AdminService\RoleUserHandler;
use App\Http\Controllers\AdminService\UserList;
use App\Http\Controllers\AdminService\UserListRolePermissionHandler;
use App\Http\Controllers\AdminService\UsersList;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app(Index::class)($this);

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
        return app(RoleUserHandler::class)($request);

    }

    //Show specific user for update roles and permissions
    public function userList($id)
    {
        return app(UserList::class)($id);
    }

    // Show all users in site
    public function usersList()
    {
        return app(UsersList::class)($this);
    }


    public function userListRolePermissionHandler(Request $request,$id)
    {
       return app(UserListRolePermissionHandler::class)($request,$id);

    }
}
