<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompetenceCentersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectTeamTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ComputersTableSeeder::class);
    }
}
