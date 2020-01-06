<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'gender' => $faker->firstNameMale,
        'address' => $faker->streetAddress,
    ];
});
