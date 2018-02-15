<?php

use Faker\Generator as Faker;

$factory->define(Model\Models\Article::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->unique()->words(4, true),
        'slug' => str_slug($title),
        'published' => $published = $faker->boolean,
        'published_at' => $published ? $faker->dateTimeThisMonth : null,
        'published_by' => $published ? $author = $faker->numberBetween(2, 11) : null,
        'content' => $faker->realText(300),
        'author_id' => isset($author) ? $author : $faker->numberBetween(2, 11)
    ];
});
