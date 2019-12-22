<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'creator_id' => factory(User::class),
    ];
});
