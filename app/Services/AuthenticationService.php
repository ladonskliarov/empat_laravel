<?php

namespace App\Services;
use App\Repositories\AuthenticationRepository;

class AuthenticationService
{
    protected AuthenticationRepository $authRepository;

    public function __construct(AuthenticationRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function registerUser(array $data)
    {
        return $this->authRepository->registerUser($data);
    }

    public function loginUser(array $credentials)
    {
        return $this->authRepository->loginUser($credentials);
    }
}