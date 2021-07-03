<?php

namespace App\GraphQL\Queries;

use App\Models\User;

class UserResolver
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $user = User::find($args['id']);
        return $user;
    }


    public function findByIdUser($_, array $args)
    {
        $user = User::find($args['id']);
        $user['name'] = strtoupper($user['name']);
        return $user;
    }
}
