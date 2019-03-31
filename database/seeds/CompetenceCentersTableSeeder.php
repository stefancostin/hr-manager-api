<?php

use Illuminate\Database\Seeder;
use App\CompetenceCenter;

class CompetenceCentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompetenceCenter::create([
            'id' => 1,
            'code' => 'RO1',
            'city' => 'Iasi',
            'country' => 'Romania'
        ]);
        CompetenceCenter::create([
            'id' => 2,
            'code' => 'RO2',
            'city' => 'Suceava',
            'country' => 'Romania'
        ]);
        CompetenceCenter::create([
            'id' => 3,
            'code' => 'RO3',
            'city' => 'Bucuresti',
            'country' => 'Romania'
        ]);
        CompetenceCenter::create([
            'id' => 4,
            'code' => 'RO4',
            'city' => 'Constanta',
            'country' => 'Romania'
        ]);
        CompetenceCenter::create([
            'id' => 5,
            'code' => 'RO5',
            'city' => 'Brasov',
            'country' => 'Romania'
        ]);
        CompetenceCenter::create([
            'id' => 6,
            'code' => 'RO6',
            'city' => 'Cluj',
            'country' => 'Romania'
        ]);
        CompetenceCenter::create([
            'id' => 7,
            'code' => 'IT1',
            'city' => 'Milan',
            'country' => 'Italy'
        ]);
        CompetenceCenter::create([
            'id' => 8,
            'code' => 'IT2',
            'city' => 'Torino',
            'country' => 'Italy'
        ]);
        CompetenceCenter::create([
            'id' => 9,
            'code' => 'AU1',
            'city' => 'Salzburg',
            'country' => 'Austria'
        ]);
        CompetenceCenter::create([
            'id' => 10,
            'code' => 'AU2',
            'city' => 'Graz',
            'country' => 'Austria'
        ]);
        CompetenceCenter::create([
            'id' => 11,
            'code' => 'DE1',
            'city' => 'Hamburg',
            'country' => 'Germany'
        ]);
        CompetenceCenter::create([
            'id' => 12,
            'code' => 'DE2',
            'city' => 'Hannover',
            'country' => 'Germany'
        ]);
        CompetenceCenter::create([
            'id' => 13,
            'code' => 'DE3',
            'city' => 'Frankfurt',
            'country' => 'Germany'
        ]);
        CompetenceCenter::create([
            'id' => 14,
            'code' => 'DE4',
            'city' => 'Munich',
            'country' => 'Germany'
        ]);
        CompetenceCenter::create([
            'id' => 15,
            'code' => 'DE5',
            'city' => 'Stuttgart',
            'country' => 'Germany'
        ]);
    }
}
