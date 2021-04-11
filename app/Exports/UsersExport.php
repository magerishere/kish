<?php

namespace App\Exports;

use App\Models\User;
use App\Models\UserMeta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Facades\Excel;

class UsersExport
{
    
    public function csv()
    {
        $users = User::all();

        foreach ($users as $user) {

                $userData[] = [
                    'ID' => $user->id,
                    'Name' => $user->name,
                    'Address' => $user->address,
                    'Postcode' => $user->postcode,
                ];
            }

        // Generate and return the spreadsheet
        Excel::create('users', function ($excel) use ($userData) {

            // Build the spreadsheet, passing in the users array
            $excel->sheet('sheet1', function ($sheet) use ($userData) {
                $sheet->fromArray($userData);
            });

        })->download('csv');
    }
}
