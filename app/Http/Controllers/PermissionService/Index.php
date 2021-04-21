<?php
namespace App\Http\Controllers\PermissionService;


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
        return view('admin.permissions.index',compact('permissions','roles'));
    }
}
