<?php

use App\Computer;
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

// $factory->define(Computer::class, function (Faker $faker) {
//     return [
//         'employee_id' => $faker->numberBetween($min = 1, $max = 5),
//         'employee_id' => factory(App\Employee::class)->create()->id,
//         'code' => $faker->stateAbbr,
//         'operating_system' => $faker->stateAbbr,
//         'cpu' => $faker->stateAbbr,
//         'ram' => $faker->stateAbbr,
//         'hdd' => $faker->stateAbbr,
//     ];
// });
