<?php
namespace App\Http\Controllers\PermissionService;


use Spatie\Permission\Models\Permission;
use Throwable;

class Destroy {
    public function __invoke($id)
    {
        try{

            $permission = Permission::findOrFail(decrypt($id));
            $permission->delete();
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return response()
            ->json(['status'=>200]);
    }
}
