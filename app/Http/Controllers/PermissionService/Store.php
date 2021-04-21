<?php
namespace App\Http\Controllers\PermissionService;


use Spatie\Permission\Models\Permission;
use Throwable;

class Store {
    public function __invoke($request)
    {
        try {
           $permission =  Permission::create(['name'=>$request->input('name')]);
           $permission->assignRole($request->roleIds);
        } catch(Throwable $exception) {
            return back()
                ->withError('cannot store permission' . $exception);
        }
        return response()
            ->json(['permissionId'=>$permission->id]);
    }
}
