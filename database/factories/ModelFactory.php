<?php

use Faker\Generator as Faker;

$factory->define(Model\Models\AbstractModel::class, function (Faker $faker) {
    $sex = $faker->boolean;
    return [
        'created_by' => $faker->numberBetween(12, 16),
        'last_name' => $faker->lastName($sex ? 'female' : 'male'),
        'first_name' => $faker->firstName($sex ? 'female' : 'male'),
        'chest' => $sex ? $faker->numberBetween(75, 95) : null,
        'hips' => $sex ? $faker->numberBetween(75, 100) : null,
        'waist' => $sex ? $faker->numberBetween(50, 70) : $faker->numberBetween(75, 95),
        'shoe_size' => $sex ? $faker->numberBetween(34, 40) : $faker->numberBetween(42, 50),
        'height' => $sex ? $faker->numberBetween(170, 185) : $faker->numberBetween(170, 185),
        'hair' => $faker->randomElement(config('enums.hair_colors')),
        'cap_size' => $sex ? $faker->randomElement(config('enums.cap_sizes')) : null,
        'sex' => $sex ? 'F' : 'M',
    ];
});
