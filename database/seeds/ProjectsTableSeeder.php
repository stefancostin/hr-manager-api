<?php

use Illuminate\Database\Seeder;
use App\Project;
use Carbon\Carbon;

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
            ['id' => 1, 'code' => 'ETR', 'name' => 'Technical Evaluation Tracking', 'created_at' => $this->creationDate('2018-01-02')],
            ['id' => 2, 'code' => 'IAM', 'name' => 'Investment Asset Management', 'created_at' => $this->creationDate('2018-01-08')],
            ['id' => 3, 'code' => 'ERP', 'name' => 'Enterprise Resource Planning', 'created_at' => $this->creationDate('2018-02-05')],
            ['id' => 4, 'code' => 'FDT', 'name' => 'Framework Development Toolkit', 'created_at' => $this->creationDate('2018-02-15')],
            ['id' => 5, 'code' => 'OPS', 'name' => 'Offshore Performance Statistics', 'created_at' => $this->creationDate('2018-03-05')],
            ['id' => 6, 'code' => 'TCS', 'name' => 'Telecommunication and Intranet System', 'created_at' => $this->creationDate('2018-04-05')],
            ['id' => 7, 'code' => 'MAM', 'name' => 'Microservices Architecture Monitoring', 'created_at' => $this->creationDate('2018-05-05')],
            ['id' => 8, 'code' => 'BKS', 'name' => 'Branch Banking Software', 'created_at' => $this->creationDate('2018-05-25')],
            ['id' => 9, 'code' => 'RSA', 'name' => 'Release Scheduling Application', 'created_at' => $this->creationDate('2018-07-05')],
            ['id' => 10, 'code' => 'CDT', 'name' => 'Credits Asset Tracking', 'created_at' => $this->creationDate('2018-09-05')],
            ['id' => 11, 'code' => 'PRS', 'name' => 'Production Release Scheduling', 'created_at' => $this->creationDate('2018-09-25')],
            ['id' => 12, 'code' => 'OFM', 'name' => 'Operations Framework', 'created_at' => $this->creationDate('2018-11-05')],
            ['id' => 13, 'code' => 'IST', 'name' => 'Information Support Toolkit', 'created_at' => $this->creationDate('2018-11-12')],
            ['id' => 14, 'code' => 'MBK', 'name' => 'Mobile Banking', 'created_at' => $this->creationDate('2018-11-18')],
            ['id' => 15, 'code' => 'CRM', 'name' => 'Customer Rrelationship Manager', 'created_at' => $this->creationDate('2018-11-25')],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }

    /**
     * Insert creation date into seed.
     *
     * @param string 'yyyy-mm-dd'
     * @return Carbon-Formated Date
     */
    private function creationDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date);
    }
}
