<?php
namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;


class RegistrationsExportMapping implements FromCollection, WithMapping, WithHeadings
{

    private $allUsers;
    public function __construct()
    {
        $this->allUsers = User::all();
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //returns Data with User data, all user data, not restricted to start/end dates
        return User::with('meta')->get();
    }

    public function map($user) : array {
        $data = array(
            $user->id,
            $user->email,
            $user->meta ? $user->meta->name : 'Not set',
            $user->meta ? $user->meta->gender ? 'Female' : 'Male' : 'Not set',
            $user->meta ? $user->meta->phone_number : 'Not set',
            $user->meta ? $user->meta->address : 'Not set',
            'roles' => array(),
            'permissions' => array(),
            $user->image ? env('APP_URL') . $user->image->url : env('APP_URL') .  '/storage/images/avatar.png',

        );
        foreach ($user->roles as $role) {
            $data['roles'][] = $role->name;

        }
        foreach ($user->permissions as $permission) {
            $data['permissions'][] = $permission->name;
        }

        return $data;


    }



    public function headings() : array {
        return [
           '#',
           'Email',
           'Name',
           'Gender',
           'phone_number',
           'address',
           'roles',
           'permissions',
           'images',

        ] ;
    }
}
