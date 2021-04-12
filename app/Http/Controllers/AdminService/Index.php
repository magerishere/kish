<?php
namespace App\Http\Controllers\AdminService;

use App\Models\User;
use App\Models\UserMeta;
use Throwable;

class Index {
    public function __invoke()
    {
        try{
            $users      = User::all();
            $usersMeta  = UserMeta::all();
            // count for charts
            $total      = $users->count();
            $female     = $usersMeta->where('gender',1)->count();
            $male       = $usersMeta->where('gender',0)->count();
            $avgYear    = $usersMeta->avg('year');

        } catch(Throwable $e) {
            return back()
            ->withError($e->getMessage());
        }

        return view('admin.index',compact('total','female','male','avgYear'));
    }
}
