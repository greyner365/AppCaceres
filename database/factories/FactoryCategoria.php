<?php

use Faker\Generator as Faker;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [

        'categoria'=>$faker->word(),
        'descripcion'=>$faker->sentence()
    ];
});
