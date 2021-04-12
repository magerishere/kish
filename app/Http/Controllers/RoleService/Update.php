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
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }

    }
}
