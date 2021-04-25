<?php
namespace App\Http\Controllers\PermissionService;


use Spatie\Permission\Models\Permission;
use Throwable;

class Update {
    public function __invoke($request,$id)
    {
        try{
            $permission = Permission::findById(decrypt($id));
            $permission->update(['name'=>$request->name]);
            foreach($request->roleIds as $id)
            {
                 $permission->assignRole(decrypt($id));
            }


        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return response()
            ->json(['status'=>200]);
    }
}
