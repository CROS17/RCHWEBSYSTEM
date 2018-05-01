<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    
    $name = $faker->sentence(4);
    return [
    	'user_id' => rand(1,30),
    	'tipoclients_id' => rand(1,20),
    	'tipodocs_id' => rand(1,20),
    	'name' => $name,
    	'correo' => $correo,
        'telefono' => $telefono, 
        'celular' => $celular,

    ];
});
