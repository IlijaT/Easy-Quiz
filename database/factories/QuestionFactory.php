<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Test;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'query' => $faker->sentence,
        'test_id' => factory(Test::class),
    ];
});
