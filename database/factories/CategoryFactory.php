<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'id_cate' => 1,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
