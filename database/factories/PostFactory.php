<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
    	'body'=>$faker->text,
        'image'=>$faker->imageUrl,
        'group_id' => App\Group::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'etiqueta_id' => App\User::all()->random()->id,
    ];
});
