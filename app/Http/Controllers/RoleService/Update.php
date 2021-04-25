<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Role;
use Throwable;

class Update {

    public function __invoke($request,$id)
    {
        try{
            $role = Role::findById(decrypt($id));
            $role->update(['name'=>$request->name]);
    
           foreach($request->permissionIds as $id)
           {
               $role->syncPermissions(decrypt($id));
           }

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }

        return response()->json(['status'=>200]);

    }
}
