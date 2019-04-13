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
            ['id' => 1, 'code' => 'ETR', 'name' => 'Technical Evaluation Tracking'],
            ['id' => 2, 'code' => 'IAM', 'name' => 'Investment Asset Management'],
            ['id' => 3, 'code' => 'ERP', 'name' => 'Enterprise Resource Planning'],
            ['id' => 4, 'code' => 'FDT', 'name' => 'Framework Development Toolkit'],
            ['id' => 5, 'code' => 'OPS', 'name' => 'Offshore Performance Statistics'],
            ['id' => 6, 'code' => 'TCS', 'name' => 'Telecommunication and Intranet System'],
            ['id' => 7, 'code' => 'MAM', 'name' => 'Microservices Architecture Monitoring'],
            ['id' => 8, 'code' => 'BKS', 'name' => 'Branch Banking Software'],
            ['id' => 9, 'code' => 'RSA', 'name' => 'Release Scheduling Application'],
            ['id' => 10, 'code' => 'CDT', 'name' => 'Credits Asset Tracking'],
            ['id' => 11, 'code' => 'PRS', 'name' => 'Production Release Scheduling'],
            ['id' => 12, 'code' => 'OFM', 'name' => 'Operations Framework'],
            ['id' => 13, 'code' => 'IST', 'name' => 'Information Support Toolkit'],
            ['id' => 14, 'code' => 'MBK', 'name' => 'Mobile Banking'],
            ['id' => 15, 'code' => 'CRM', 'name' => 'Customer Rrelationship Manager'],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
