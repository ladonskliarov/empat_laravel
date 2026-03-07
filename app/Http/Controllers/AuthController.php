<?php

namespace App\Http\Controllers;

use App\Services\AuthenticationService;
use App\Http\Requests\LoginPostRequest;
use App\Http\Requests\RegisterPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected AuthenticationService $authenticationService;

    public function __construct(AuthenticationService $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginPostRequest $request)
    {
        $data = $request->validated();
        if ($this->authenticationService->loginUser($data)) {
            return redirect()->route('formations.index'); 
        } else {
            return back()->withErrors(['email' => 'Невірний email або пароль.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }

    public function showRegistration()
    {
        return view('auth.registration');
    }

    public function register(RegisterPostRequest $request)
    {
        $data = $request->validated();
        $user = $this->authenticationService->registerUser($data);
        Auth::login($user);

        return redirect()->route('formations.index');
    }
}