<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
    $category = \App\Category::all()->random();
    return [
        'name' => $faker->productName,
        'category_id' => $category->id,
        'short_description' => $faker->sentences(3, true),
        'details' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'price' => $faker->randomFloat(0, 10, 500),
        'discount' => $faker->randomFloat(0, 10, 80),
        'currency_code' => \App\Currency::all()->random()->code,
        'stars' => $faker->numberBetween(2, 5),
        'cover_image' => 'p' . random_int(1, 8) . '.jpg',
        'user_id' => \App\User::all()->random()->id,
        'supplier_id' => \App\Supplier::all()->random()->id
    ];
});
