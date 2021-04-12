<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Throwable;

class Edit {

    public function __invoke($id)
    {

        try{

            $role = Role::findById($id);
            $permissions = Permission::all();
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return view('admin.roles.edit',compact('role','permissions'));
    }
}
