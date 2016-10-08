<?php

use App\Club;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
	$club = Club::where('name','=','EscBasket')->first();
	return [
		'title' => $faker->numerify('Categoría #'),
		'description' => $faker->paragraph,
		'principal_image' => $faker->randomElement($array = array ('cabin','cake','circus', 'game', 'safe', 'submarine')),
		'club_id'	=> $club->id
	];
});
