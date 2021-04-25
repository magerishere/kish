<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Role;
use Throwable;

class Store {

    public function __invoke($request)
    {


        try {

           $role = Role::create(['name'=>$request->input('name')]);

           foreach($request->permissionIds as $id)
           {
               $role->givePermissionTo(decrypt($id));
           }

        } catch(Throwable $exeption) {
            return back()
                ->withError('cannot store role' . $exeption);
        }
        return response()->json(['roleId'=>$role->id]);

    }
}
