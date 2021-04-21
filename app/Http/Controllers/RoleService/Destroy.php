<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Role;
use Throwable;

class Destroy {

    public function __invoke($id)
    {
        try{
            $role = Role::findOrFail($id);
            $role->delete();

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return response()
            ->json(['status'=>200]);

    }
}
