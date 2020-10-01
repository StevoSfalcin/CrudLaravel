<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Noticia;
use Faker\Generator as Faker;

$factory->define(Noticia::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
        'materia' => $faker->text,
        'idUser' =>$faker->randomElement(array('1','2')),
    ];
});
