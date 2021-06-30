<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Carbon\Carbon;

class CreateUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $now = Carbon::now();
        $user = new User();
        $user->name = $args['name'];
        $user->email = $args['email'];
        $user->password = $args['password'];
        $user->created_at = $now;
        $user->updated_at = $now;
        $user->save();
        return $user;

    }
}
