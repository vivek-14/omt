<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * [Description UserServices]
 */
class UserServices
{
    protected User $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param mixed $credentials
     *
     * @return [type]
     */
    public function authService($credentials)
    {
        // authenticate users existance
        if (Auth::attempt($credentials)) {
            dd(Auth::user());
        }
    }
}
