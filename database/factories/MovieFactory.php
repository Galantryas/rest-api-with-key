<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
  $genre = ['horor', 'action', 'romance', 'thiller'];
  $r = array_rand($genre);
    return [
        'judul' => $faker->catchPhrase,
        'genre' => $genre[$r]
    ];
});
