<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;



$factory->define(App\Person::class, function (Faker $faker) {
	$users =App\User::all();
    return [
    	"name" => $faker->name,
    	"lastName"=> $faker->lastName,
    	"partner"=> $faker->randomDigit(0,30),
        'email' => $faker->unique()->safeEmail,
    	"avatar"=>$faker->imageUrl,
    	"user_id"=>$faker->randomDigit($users),
    ];
});
