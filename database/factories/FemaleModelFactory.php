<?php

use Faker\Generator as Faker;

$factory->define(\Model\Models\WomanModel::class, function (Faker $faker) {
    return [
        'created_by' => $faker->numberBetween(12, 16),
        'last_name' => $faker->lastName('female'),
        'first_name' => $faker->firstName('female'),
        'chest' => $faker->numberBetween(75, 95),
        'hips' => $faker->numberBetween(75, 100),
        'waist' => $faker->numberBetween(50, 70),
        'shoe_size' => $faker->numberBetween(34, 40),
        'height' => $faker->numberBetween(170, 185),
        'hair' => $faker->randomElement(config('enums.hair_colors')),
        'cap_size' => $faker->randomElement(config('enums.cap_sizes')),
        'sex' => 'F',
    ];
});
