<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Role;
use Throwable;

class Update {

    public function __invoke($request,$id)
    {
        try{

            $role = Role::findById($id);

            $role->update(['name'=>$request->name]);
            $role->syncPermissions($request->permissionIds);

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }

        return response()->json(['status'=>200]);

    }
}
