<?php

use Faker\Generator as Faker;

$factory->define(App\Contrato::class, function (Faker $faker) {
    
        $name = $faker->sentence(4);
    return [
    	'user_id' => rand(1,30),
    	'tipoevents_id' => rand(1,20),
    	'clients_id' => rand(1,20)
    	'direccion' => $direccion,
        'fecha' => $fecha, 
        'precio' => $precio,
        'status' => $faker->randomElement(['ESPERA', 'REALIZADO']),

    ];
});
