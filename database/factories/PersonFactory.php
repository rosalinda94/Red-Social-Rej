<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Person::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'lastName' => $faker->lastName,
        'partner'=>$faker->sentence,
        'sex'=>$faker->title,
        'avatar'=>$faker->imageUrl,
        'email' => $faker->unique()->safeEmail,
        'user_id' => App\User::all()->random()->id,
       
    ];
});
