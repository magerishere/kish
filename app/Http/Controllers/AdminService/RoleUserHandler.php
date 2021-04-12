<?php
namespace App\Http\Controllers\AdminService;

use Illuminate\Support\Facades\DB;
use Throwable;

class RoleUserHandler {
    public function __invoke($request)
    {
        try{
            DB::table('role_user')
                ->where(['user_id'=>$request->user_id])
                ->update(['privilages'=>$request->role_id]);

            } catch(Throwable $e) {
                return back()
                ->withError($e->getMessage());
            }
            
            return back()
                ->with('success','User has been updated!');
    }
}
