<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Idioma;
use Faker\Generator as Faker;

$factory->define(Idioma::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name
    ];
});
