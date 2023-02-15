<?php

namespace App\Imports;


use App\Models\User;
use Hash;

use Maatwebsite\Excel\Concerns\ToModel;
use Str;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = new User([
            //
            "name" => $row[0],
            "email" => $row[1],
            "code" => $row[2]==='user' ? Str::random(5): null,
            "password" => Hash::make('password')
        ]);
        if ($user->code){
            $user->assignRole(4);
        }

        else
            $user->assignRole(3);
        return $user ;
    }
}
