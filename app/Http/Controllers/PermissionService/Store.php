<?php
namespace App\Http\Controllers\PermissionService;


use Spatie\Permission\Models\Permission;
use Throwable;

class Store {
    public function __invoke($request)
    {
        try {
            Permission::create(['name'=>$request->input('name')]);
        } catch(Throwable $exception) {
            return back()
                ->withError('cannot store permission' . $exception);
        }
        return back()
            ->withSuccess('permission has been created');
    }
}
