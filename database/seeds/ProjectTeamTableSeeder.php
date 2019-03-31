<?php

use Illuminate\Database\Seeder;
use App\ProjectTeam;

class ProjectTeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectTeamEntities = [
            ['id' => 1, 'project_id' => 1, 'team_id' => 1],
            ['id' => 2, 'project_id' => 2, 'team_id' => 1],
            ['id' => 3, 'project_id' => 3, 'team_id' => 1],
            ['id' => 4, 'project_id' => 3, 'team_id' => 2],
            ['id' => 5, 'project_id' => 4, 'team_id' => 2],
            ['id' => 6, 'project_id' => 5, 'team_id' => 2],
            ['id' => 7, 'project_id' => 5, 'team_id' => 3],
            ['id' => 8, 'project_id' => 6, 'team_id' => 3],
            ['id' => 9, 'project_id' => 7, 'team_id' => 3],
            ['id' => 10, 'project_id' => 8, 'team_id' => 3],
            ['id' => 11, 'project_id' => 8, 'team_id' => 4],
            ['id' => 12, 'project_id' => 9, 'team_id' => 4],
            ['id' => 13, 'project_id' => 10, 'team_id' => 4],
            ['id' => 14, 'project_id' => 11, 'team_id' => 5],
            ['id' => 15, 'project_id' => 12, 'team_id' => 5],
            ['id' => 16, 'project_id' => 13, 'team_id' => 5],
            ['id' => 17, 'project_id' => 13, 'team_id' => 6],
            ['id' => 18, 'project_id' => 14, 'team_id' => 6],
            ['id' => 19, 'project_id' => 14, 'team_id' => 7],
            ['id' => 20, 'project_id' => 15, 'team_id' => 7]
        ];

        foreach ($projectTeamEntities as $projectTeamEntity) {
            ProjectTeam::create($projectTeamEntity);
        }
    }
}
