<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RoleService\Destroy;
use App\Http\Controllers\RoleService\Edit;
use App\Http\Controllers\RoleService\Index;
use App\Http\Controllers\RoleService\Store;
use App\Http\Controllers\RoleService\Update;
use App\Http\Controllers\RoleService\UpdatePermissions;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
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
    public function store(RoleRequest $request)
    {
        return app(Store::class)($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return app(Edit::class)($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
       return app(Update::class)($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return app(Destroy::class)($id);
    }

    public function updatePermissions(Request $request,$id)
    {
        return app(UpdatePermissions::class)($request,$id);
    }


    public function searchPermissions(Request $request)
    {
        $role = Role::where('name',$request->roleName)->first();

        $permissions = Permission::where('name','like','%' . $request->parentName . '%')->get();

        return response()->json(['permissions' => $permissions,'roleHasPermissions'=>$role->permissions]);
    }
}
