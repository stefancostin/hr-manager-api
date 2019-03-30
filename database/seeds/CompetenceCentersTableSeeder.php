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
            'city' => 'Iasi'
        ]);
        CompetenceCenter::create([
            'id' => 2,
            'code' => 'RO2',
            'city' => 'Suceava'
        ]);
        CompetenceCenter::create([
            'id' => 3,
            'code' => 'RO3',
            'city' => 'Bucuresti'
        ]);
        CompetenceCenter::create([
            'id' => 4,
            'code' => 'RO4',
            'city' => 'Constanta'
        ]);
        CompetenceCenter::create([
            'id' => 5,
            'code' => 'RO5',
            'city' => 'Brasov'
        ]);
        CompetenceCenter::create([
            'id' => 6,
            'code' => 'RO6',
            'city' => 'Cluj'
        ]);
    }
}
