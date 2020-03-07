<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class UserController extends Controller
{
    public function create(Request $request): UserResponse
    {
        $name = $request->get('name');
        $user = User::create([
            'name' => $name,
            'email' => 'somebullshit@gmail.com',
            'password' => Str::random(10),
            'email_verified_at' => Carbon::now()
        ]);

        \Auth::login($user, true);

        return new UserResponse($user);
    }
}
