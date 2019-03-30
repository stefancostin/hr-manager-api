<?php

use App\ProjectTeam;
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

// $factory->define(ProjectTeam::class, function (Faker $faker) {
//     return [
//         'project_id' => $faker->numberBetween($min = 1, $max = 5),
//         'team_id' => $faker->numberBetween($min = 1, $max = 5),
//     ];
// });
