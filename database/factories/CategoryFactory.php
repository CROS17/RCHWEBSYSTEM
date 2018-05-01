<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
        'name' => $title,
        'slug' => str_slug($title), //transforma un strign a slug
        'body' => $faker->text(500), //crea la info falsa
    ];
});
