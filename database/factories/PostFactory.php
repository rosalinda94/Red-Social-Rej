<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastName' => $faker->lastName,
        'partner'=>$faker->sentence,
        'sex'=>$faker->title,
        'avatar'=>$faker->imageUrl,
        'email' => $faker->unique()->safeEmail,
       
    ];
});
