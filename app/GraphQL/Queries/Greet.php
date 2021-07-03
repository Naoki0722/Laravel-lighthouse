<?php

namespace App\GraphQL\Queries;

class Greet
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($rootValue, array $args): String
    {
        return "hello, {$args['name']}！";
    }
}
