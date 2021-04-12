<?php
namespace App\Http\Controllers\AdminService;

use App\Models\User;
use Throwable;

class UserListRolePermissionHandler {
    public function __invoke($request,$id)
    {
        try{
            $user = User::findOrFail($id);
            $user->syncRoles($request->roleIds);
            $user->syncPermissions($request->permissionIds);

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
    }
}





