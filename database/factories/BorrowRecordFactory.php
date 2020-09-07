<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Borrow;
use Faker\Generator as Faker;

$factory->define(Borrow::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $books = App\Book::pluck('id')->toArray();
    $borrowDate = $faker->dateTimeBetween('this week', '+7 days');
    $returnDate = $faker->dateTimeBetween($borrowDate, strtotime('+14 days'));

    return [
        'book_id' => $faker->randomElement($books),
        'user_id' => $faker->randomElement($users),
        'borrow_date' => $borrowDate,
        'return_date' => $returnDate,
    ];
});
