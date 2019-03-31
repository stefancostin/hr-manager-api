<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['id' => 1, 'competence_center_id' => 1, 'code' => 'TM1', 'name' => 'Underwriting'],
            ['id' => 2, 'competence_center_id' => 1, 'code' => 'TM2', 'name' => 'Monitoring'],
            ['id' => 3, 'competence_center_id' => 6, 'code' => 'TM3', 'name' => 'Surveillance'],
            ['id' => 4, 'competence_center_id' => 5, 'code' => 'TM4', 'name' => 'Credits'],
            ['id' => 5, 'competence_center_id' => 4, 'code' => 'TM5', 'name' => 'Contracts'],
            ['id' => 6, 'competence_center_id' => 3, 'code' => 'TM6', 'name' => 'Assets'],
            ['id' => 7, 'competence_center_id' => 2, 'code' => 'TM7', 'name' => 'Deposits'],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
