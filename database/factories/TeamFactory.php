<?php

use App\Team;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * Out of Date
 * Since adding unique() sql constraints,
 * using factory w/ faker causes errors.
 *
 * Changing to manual seeding in order to
 * have better control over dataset.
 */

// $factory->define(Team::class, function (Faker $faker) {
//     return [
//         'code' => $faker->stateAbbr,
//         'name' => $faker->word,
//         'competence_center_id' => $faker->numberBetween($min = 1, $max = 5),
//     ];
// });
