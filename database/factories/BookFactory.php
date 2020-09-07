<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'quantity' => $faker->randomDigit,
        'publisher' => $faker->company,
        'year' => $faker->year($max = 'now')
    ];
});
