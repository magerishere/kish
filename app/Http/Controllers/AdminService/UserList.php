<?php
namespace App\Http\Controllers\AdminService;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Throwable;

class UserList {
    public function __invoke($id)
    {
        try{
            $user = User::findOrFail($id);
            $roles = Role::all();
            $permissions = Permission::all();

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return view('admin.users.show',compact('user','roles','permissions'));
    }
}
