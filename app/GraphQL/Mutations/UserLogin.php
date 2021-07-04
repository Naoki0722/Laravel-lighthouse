<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Error\Error;
use Illuminate\Support\Facades\Auth;

class UserLogin
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): User
    {
        $guard = Auth::guard(config('sanctum.guard', 'web'));

        if( ! $guard->attempt($args)) {
            throw new Error('Invalid credentials.');
        }

        /**
         * Since we successfully logged in, this can no longer be `null`.
         *
         * @var \App\Models\User $user
         */
        $user = $guard->user();

        return $user;
        // $userData = User::where('email', $args["email"])->where('password', $args["password"])->first();
        // $user = Auth::loginUsingId($userData->id);
        // $user->createToken('loginTest');
        // return Auth::user();
    }
}
