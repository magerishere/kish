<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Throwable;

class Index {

    public function __invoke()
    {
        try{
            $roles = Role::all();
            $permissions = Permission::all();

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return view('admin.roles.index',compact('roles','permissions'));

    }
}
