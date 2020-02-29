<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request): UserResponse
    {
        $name = $request->get('name');
        $user = User::create([
            'name' => $name
        ]);

        \Auth::login($user);

        return new UserResponse($user);
    }
}
