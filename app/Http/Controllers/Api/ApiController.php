<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function homeData()
    {
        return 'home data';
    }

    public function allUsers()
    {
        $users = User::get();
        return $users;
    }

    public function getUser(Request $request)
    {
        $user = User::find($request->id);
        return $user;
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        if($user)
        {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            return $user;
        }

        return 'user not found';
    }


    public function addUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $user;
    }
}
