<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrow;
use Faker\Generator as Faker;

$factory->define(Borrow::class, function (Faker $faker) {
    $borrowDate = $faker->dateTimeBetween('this week', '+7 days');
    $returnDate = $faker->dateTimeBetween($borrowDate, strtotime('+14 days'));

    return [
        'book_id' => function () {
            return factory(\App\Book::class)->create()->id;
        },
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        },
        'borrow_date' => $borrowDate,
        'return_date' => $returnDate,
    ];
});
