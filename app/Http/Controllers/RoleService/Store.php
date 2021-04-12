<?php
namespace App\Http\Controllers\RoleService;

use Spatie\Permission\Models\Role;
use Throwable;

class Store {

    public function __invoke($request)
    {
        try {
            Role::create(['name'=>$request->input('name')]);
        } catch(Throwable $exeption) {
            return back()
                ->withError('cannot store role' . $exeption);
        }
        return back()
            ->withSuccess('role has been created!');

    }
}
