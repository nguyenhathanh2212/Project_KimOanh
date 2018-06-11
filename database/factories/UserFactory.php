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
        'email' => $faker->unique()->safeEmail,
        'password' =>  '123123',
        'fullname'  =>  $faker->name,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Library::class, function (Faker $faker) {
    return [
        'title' =>  $faker->text(rand(50, 100)),
    ];
});

$factory->define(App\Models\Picture::class, function (Faker $faker) {
    return [
        'name'=> rand(1, 30) . '.jpg',
    ];
});

$factory->define(App\Models\Video::class, function (Faker $faker) {
    return [
        'name'=> rand(1, 30) . '.mp3',
    ];
});

$factory->define(App\Models\News::class, function (Faker $faker) {
    return [
        'title'=> $faker->text(rand(50, 100)),
        'preview'=> $faker->text(rand(50, 100)),
        'content'=> $faker->text(rand(50, 100))
    ];
});

$factory->define(App\Models\OverView::class, function (Faker $faker) {
    return [
        'preview'=> $faker->text(rand(50, 100)),
        'position'=> $faker->text(rand(50, 100)),
        'investment'=> $faker->text(rand(50, 100)),
        'area'=> $faker->text(rand(50, 100)),
        'structure'=> $faker->text(rand(50, 100)),
        'utility_local'=> $faker->text(rand(50, 100)),
        'utility_link'=> $faker->text(rand(50, 100)),
        'contract'=> $faker->text(rand(50, 100)),
    ];
});

$factory->define(App\Models\Project::class, function (Faker $faker) {
    return [
        'title'=> $faker->text(rand(50, 100)),
        'preview'=> $faker->text(rand(50, 100)),
        'preview'=> $faker->text(rand(50, 100)),
        'location_content' => $faker->text(rand(50, 100)),
        'video_id'=> 1,
    ];
});

$factory->define(App\Models\TypeLibrary::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(rand(50, 100))
    ];
});

$factory->define(App\Models\TypeNews::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(rand(50, 100))
    ];
});

$factory->define(App\Models\TypeProject::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(rand(50, 100))
    ];
});

$factory->define(App\Models\Utility::class, function (Faker $faker) {
    return [
        'content'=> $faker->text(rand(100, 100)),
        'title'=> $faker->text(rand(100, 200))
    ];
});

