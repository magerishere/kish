<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Role;
use Throwable;

class UpdatePermissions {

    public function __invoke($request,$id)
    {
        $role = Role::findById($id);

        try {
            $role->syncPermissions($request->ids);

        } catch(Throwable $exeption) {
            return back()
                ->withError('cannot update this role permissions' . $exeption);
        }
        return back()
            ->withSuccess('role permissions succesfuly update!');

    }
}
