<?php

use Faker\Generator as Faker;

$factory->define(App\Tipoevent::class, function (Faker $faker) {
  
    $evento = $faker->sentence(4);
    return [
        'evento' => $evento,
    ];
});
