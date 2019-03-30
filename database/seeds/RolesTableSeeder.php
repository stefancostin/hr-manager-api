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
            'name' => 'Manager'
        ]);
        Role::create([
            'id' => 2,
            'code' => 'TL',
            'name' => 'Team Leader'
        ]);
        Role::create([
            'id' => 3,
            'code' => 'JDV',
            'name' => 'Java Developer'
        ]);
        Role::create([
            'id' => 4,
            'code' => 'DDV',
            'name' => 'DotNet Developer'
        ]);
        Role::create([
            'id' => 5,
            'code' => 'FDV',
            'name' => 'Front End Developer'
        ]);
        Role::create([
            'id' => 6,
            'code' => 'LDV',
            'name' => 'Lead Developer'
        ]);
        Role::create([
            'id' => 7,
            'code' => 'DBD',
            'name' => 'Database Administrator'
        ]);
        Role::create([
            'id' => 8,
            'code' => 'TST',
            'name' => 'Tester'
        ]);
    }
}
