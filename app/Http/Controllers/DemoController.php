<?php

namespace App\Http\Controllers;

use App\Exports\RegistrationsExportMapping;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class DemoController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }

    public function export()
    {
        $user = User::find(1);

        return Excel::download(new UsersExport($user), 'users.xlsx');
    }

    public function export_mapping()
    {
        return Excel::download( new RegistrationsExportMapping(), 'users-list.xlsx') ;
    }

    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return redirect()->back();
    }
}
