<?php
namespace App\Http\Controllers\PermissionService;


use Spatie\Permission\Models\Permission;
use Throwable;

class Destroy {
    public function __invoke($id)
    {
        try{

            $permission = Permission::findOrFail($id);
            $permission->delete();
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return back()
            ->withSuccess('Permission has been deleted!');
    }
}
