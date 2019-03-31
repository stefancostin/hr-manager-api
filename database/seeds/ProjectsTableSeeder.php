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
            ['id' => 1, 'code' => 'ubz', 'name' => 'Underwriting Technical Evaluation'],
            ['id' => 2, 'code' => 'uam', 'name' => 'Underwriting Asset Management'],
            ['id' => 3, 'code' => 'prz', 'name' => 'Perizie Revolution'],
            ['id' => 4, 'code' => 'xdt', 'name' => 'XFrame Development Toolkit'],
            ['id' => 5, 'code' => 'vpm', 'name' => 'Vendor Performance Monitoring'],
            ['id' => 6, 'code' => 'woc', 'name' => 'Ordering System for Telecommunication'],
            ['id' => 7, 'code' => 'owa', 'name' => 'Open Wave Architecture'],
            ['id' => 8, 'code' => 'ucb', 'name' => 'Electronic Banking'],
            ['id' => 9, 'code' => 'wrc', 'name' => 'Weekly Release Calendar'],
            ['id' => 10, 'code' => 'amg', 'name' => 'Asset Management'],
            ['id' => 11, 'code' => 'prs', 'name' => 'Preproduction Environment Scheduling'],
            ['id' => 12, 'code' => 'opm', 'name' => 'Operational Performance Management'],
            ['id' => 13, 'code' => 'igt', 'name' => 'Information Governance Tool'],
            ['id' => 14, 'code' => 'erp', 'name' => 'Enterprise Resource Planning'],
            ['id' => 15, 'code' => 'crm', 'name' => 'Customer Rrelationship Manager'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
