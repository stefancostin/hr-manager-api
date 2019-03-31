<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'code' => 'MNG',
            'name' => 'Manager',
            'description' => 'Unique per Team',
            'is_management' => true
        ]);
        Role::create([
            'id' => 2,
            'code' => 'TL',
            'name' => 'Team Leader',
            'description' => 'Unique per Team',
            'is_management' => true
        ]);
        Role::create([
            'id' => 3,
            'code' => 'JDV',
            'name' => 'Java Developer',
            'description' => 'Works on server side applications'
        ]);
        Role::create([
            'id' => 4,
            'code' => 'DDV',
            'name' => 'DotNet Developer',
            'description' => 'Works on server side applications'
        ]);
        Role::create([
            'id' => 5,
            'code' => 'ADV',
            'name' => 'Angular Developer',
            'description' => 'Works on client side applications'
        ]);
        Role::create([
            'id' => 6,
            'code' => 'RDV',
            'name' => 'React Developer',
            'description' => 'Works on client side applications'
        ]);
        Role::create([
            'id' => 7,
            'code' => 'SYS',
            'name' => 'System Administrator',
            'description' => 'Manages the operation of computer systems'
        ]);
        Role::create([
            'id' => 8,
            'code' => 'DBD',
            'name' => 'Database Administrator',
            'description' => 'Works on Host applications with Batch jobs'
        ]);
        Role::create([
            'id' => 9,
            'code' => 'TST',
            'name' => 'Tester',
            'description' => 'Responsible for Quality Assurance'
        ]);
    }
}
