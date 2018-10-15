<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'size' => $faker->randomElement($array = array ('S', 'M', 'L')),
        'description' => $faker->text($maxNbChars = 190),
        'price' => $faker->numberBetween($min = 29000, $max = 69000),
        'image' => json_encode(array('slide.jpg')),
        'id_cate' => $faker->numberBetween($min = 2, $max = 8),
        'is_featured_product' => $faker->numberBetween($min = 0, $max = 1),
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
