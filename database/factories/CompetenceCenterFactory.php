<?php

use App\CompetenceCenter;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * Out of Date
 * Since adding unique() sql constraints,
 * using factory w/ faker causes errors.
 */

// $factory->define(CompetenceCenter::class, function (Faker $faker) {
//     return [
//         'code' => $faker->stateAbbr,
//         'city' => $faker->city
//     ];
// });
