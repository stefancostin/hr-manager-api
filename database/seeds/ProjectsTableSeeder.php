<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            ['id' => 1, 'code' => 'ubz', 'name' => 'Monitoring'],
            ['id' => 2, 'code' => 'uam', 'name' => 'Underwriting Asset Management'],
            ['id' => 3, 'code' => 'prz', 'name' => 'Perizie Revolution'],
            ['id' => 4, 'code' => 'wrk', 'name' => 'Workout'],
            ['id' => 5, 'code' => 'crd', 'name' => 'Credits'],
            ['id' => 6, 'code' => 'bim', 'name' => 'Building Model'],
            ['id' => 7, 'code' => 'pam', 'name' => 'PAM'],
            ['id' => 8, 'code' => 'wpa', 'name' => 'WPA'],
            ['id' => 9, 'code' => 'dst', 'name' => 'DST'],
            ['id' => 10, 'code' => 'uip', 'name' => 'UIP'],
            ['id' => 11, 'code' => 'dfg', 'name' => 'DFG'],
            ['id' => 12, 'code' => 'bnm', 'name' => 'BNM'],
            ['id' => 13, 'code' => 'erp', 'name' => 'ERP'],
            ['id' => 14, 'code' => 'crm', 'name' => 'CRM'],
            ['id' => 15, 'code' => 'jkl', 'name' => 'JKL'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
