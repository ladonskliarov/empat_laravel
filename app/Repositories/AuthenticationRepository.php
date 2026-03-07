<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationRepository
{
    public function registerUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function loginUser(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        }
        return false;
    }
}