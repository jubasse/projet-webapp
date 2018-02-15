<?php

use Faker\Generator as Faker;

$factory->define(\Model\Models\ManModel::class, function (Faker $faker) {
    return [
        'created_by' => $faker->numberBetween(12, 16),
        'last_name' => $faker->lastName('male'),
        'first_name' => $faker->firstName('male'),
        'waist' => $faker->numberBetween(75, 95),
        'shoe_size' => $faker->numberBetween(42, 50),
        'height' => $faker->numberBetween(170, 185),
        'hair' => $faker->randomElement(config('enums.hair_colors')),
        'sex' => 'M',
    ];
});
