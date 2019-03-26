<?php

use App\User;
use Illuminate\Support\Str;
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

/**
 * Out of Date
 * Since adding unique() sql constraints,
 * using factory w/ faker causes errors.
 */

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'role_id' => $faker->numberBetween($min = 1, $max = 5),
//         'team_id' => $faker->numberBetween($min = 1, $max = 5),
//         'first_name' => $faker->name,
//         'last_name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'hiring_date' => now()
//     ];
// });
