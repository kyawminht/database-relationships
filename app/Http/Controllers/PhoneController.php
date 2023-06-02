<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PhoneController extends Controller
{

    public function index()
    {
        $user=Phone::find(1)->user;


        return [
            $user,
        ];
    }
    public function store()
    {
        $phone=new Phone();
        $phone->phone='091234567';

        $user=new User();
        $user->name="kmh";
        $user->email="k@gmail.com";
        $user->password=Hash::make('2345678');

        $user->save();

        $user->phone()->save($phone);

        return [
            'success',
        ];

    }
}
