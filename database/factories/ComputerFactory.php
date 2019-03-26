<?php

use App\Computer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * Out of Date
 * Since adding unique() sql constraints,
 * using factory w/ faker causes errors.
 */

// $factory->define(Computer::class, function (Faker $faker) {
//     return [
//         // 'user_id' => $faker->numberBetween($min = 1, $max = 5),
//         'user_id' => factory(App\User::class)->create()->id,
//         'code' => $faker->stateAbbr,
//         'operating_system' => $faker->stateAbbr,
//         'cpu' => $faker->stateAbbr,
//         'ram' => $faker->stateAbbr,
//         'hdd' => $faker->stateAbbr,
//     ];
// });
