<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' =>  "secret",
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'parent_id' => 0,
        'name' => implode(' ', $faker->words(2))
    ];
});
$factory->define(App\Models\Picture::class, function (Faker $faker) {
    return [
        'category_id'=> rand(1, 5),
        'product_id'=> rand(1, 10),
        'name'=> rand(1, 30) . '.jpg',
    ];
});
$factory->define(App\Models\Video::class, function (Faker $faker) {
    return [
    	'category_id'=> rand(1, 5),
        'product_id'=> rand(1, 10),
        'name'=> rand(1, 30) . '.mp3',
    ];
});

$factory->define(App\Models\ActionNews::class, function (Faker $faker) {
    return [
    	'category_id'=> rand(5, 10),
        'picture_id'=> rand(1, 10),
        'title'=> $faker->text(rand(50, 100)),
        'preview'=> $faker->text(rand(100, 200)),
        'content'=> $faker->text(rand(1000, 2000))
    ];
});

$factory->define(App\Models\News::class, function (Faker $faker) {
    return [
    	'category_id'=> rand(5, 10),
        'picture_id'=> rand(1, 10),
        'title'=> $faker->text(rand(50, 100)),
        'preview'=> $faker->text(rand(100, 200)),
        'content'=> $faker->text(rand(1000, 2000))
    ];
});

$factory->define(App\Models\Exchange::class, function (Faker $faker) {
    return [
    	'category_id'=> rand(5, 10),
        'picture_id'=> rand(1, 10),
        'title'=> $faker->text(rand(50, 100)),
        'content'=> $faker->text(rand(1000, 2000)),
        'title_price'=> rand(1000, 2000) . ' VND',
        'location'=> $faker->address,
        'owner'=> $faker->text(10),
        'kind_of'=> $faker->text(10),
        'legal_status'=> $faker->text(10),
        'area_used'=> rand(1000, 2000) . ' m3',
        'direction'=> $faker->text(20),
        'contact'=> $faker->e164PhoneNumber,
    ];
});

$factory->define(App\Models\Project::class, function (Faker $faker) {
    return [
    	'category_id'=> rand(5, 10),
        'picture_id'=> rand(1, 10),
        'picture_real_id'=> rand(1, 10),
        'video_id'=> rand(1, 10),
        'title'=> $faker->text(rand(50, 100)),
        'review'=> $faker->text(rand(100, 200)),
        'content_overview'=> $faker->text(rand(100, 200)),
        'content_position'=> $faker->address,
        'content_distribution'=> $faker->text(rand(100, 200)),
        'content_cataloque'=> $faker->text(rand(50, 100)),
        // 'content_contact '=> $faker->text(rand(50, 100)) . $faker->e164PhoneNumber,


    ];
});
