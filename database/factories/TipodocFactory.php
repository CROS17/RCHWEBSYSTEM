<?php

use Faker\Generator as Faker;

$factory->define(App\Tipodoc::class, function (Faker $faker) {

   	$documento = $faker->sentence(4);
    return [
        'documento' => $documento,
    ];
});
