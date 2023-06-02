<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function addRole()
    {
        $items=[
            'admin',
            'user',
            'developer',
            'Editor',
        ];

        foreach ($items as $item)
        {
            $role=new Role();
            $role->name=$item;
            $role->save();
        }

        return [
            'success'
        ];

    }
    public function addUser()
    {
        $user=new User();
        $user->name="nyo";
        $user->email="nyo@gmail.com";
        $user->password=Hash::make('12345');
        $user->save();

        $user->role()->attach([1,2]);

        return ["success"];

    }

    public function getRole()
    {
        $role=User::find(2)->role;

        return $role;
    }
}
