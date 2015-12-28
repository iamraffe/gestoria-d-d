<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Folder::class, function (Faker\Generator $faker) {
    return [
        'name' => 'root',
        'user_id' => 1,
        'parent_folder_id' => null,
    ];
});


$factory->define(App\File::class, function (Faker\Generator $faker) {
    return [
        'path' => 'documents',
        'user_id' => 1,
        'folder_id' => 1,
    ];
});
