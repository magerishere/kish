<?php
namespace App\Http\Controllers\AdminService;

use App\Models\User;
use Throwable;

class UsersList {
    public function __invoke()
    {
        try{

            $users = User::all();
        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }
        return view('admin.users.index',compact('users'));
    }
}
