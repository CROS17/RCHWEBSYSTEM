<?php

use Faker\Generator as Faker;

$factory->define(App\Tipoclient::class, function (Faker $faker) {
	
  	$descripcion = $faker->sentence(4);
    return [
        'descripcion' => $descripcion,
    ];
});
