<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrow;
use Faker\Generator as Faker;

$factory->define(Borrow::class, function (Faker $faker) {
    $borrowDate = $faker->dateTimeBetween('this week', '+7 days');
    $returnDate = $faker->dateTimeBetween($borrowDate, strtotime('+14 days'));

    return [
        'borrow_date' => $borrowDate,
        'return_date' => $returnDate,
    ];
});
