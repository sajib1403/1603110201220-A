<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
         'name' =>$faker->name('male'|'female') ,
            'email' =>$faker->companyEmail ,
            'address' =>$faker->address,

            'salary' =>$faker->numberBetween($min = 2000, $max = 3000),
    ];
});
