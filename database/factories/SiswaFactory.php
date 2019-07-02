<?php

use Faker\Generator as Faker;

$factory->define(App\Siswa::class, function(Faker $faker){
    return [
        'nama' => $faker->sentence(5),
        'kelas' => $faker->sentence(5),
        'alamat' => $faker->sentence(10)
    ];
});