<?php
namespace App\Http\Controllers\PermissionService;


use Spatie\Permission\Models\Permission;
use Throwable;

class Update {
    public function __invoke($request,$id)
    {
        try{
            $permission = Permission::findById($id);

            $permission->update(['name'=>$request->name]);

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
    }
}
