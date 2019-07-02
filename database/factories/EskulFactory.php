<?php

use Faker\Generator as Faker;

$factory->define(App\Eskul::class, function(Faker $faker){
    return [
        'nama' => $faker->sentence(10),
        'nis' => $faker->sentence(7),
        'kelas' => $faker->sentence(10),
        'jk' => $faker->sentence(10),
        'eskul' => $faker->sentence(15),
        'tujuan' => $faker->paragraph(30)
    ];
});