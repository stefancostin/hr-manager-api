<?php

use Illuminate\Database\Seeder;
use App\Computer;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $computers = [
            ['id' => 1, 'employee_id' => 1, 'code' => 'MUSPN01N', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 2, 'employee_id' => 2, 'code' => 'MUSPN02Y', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '500gb'],
            ['id' => 3, 'employee_id' => 3, 'code' => 'MUSPN03Z', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 4, 'employee_id' => 4, 'code' => 'MUSPN04M', 'operating_system' => 'Ubuntu', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 5, 'employee_id' => 5, 'code' => 'MUSPN05J', 'operating_system' => 'Ubuntu', 'cpu' => 'i7', 'ram' => '8gb', 'hdd' => '500gb'],
            ['id' => 6, 'employee_id' => 6, 'code' => 'MUSPN06H', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '500gb'],
            ['id' => 7, 'employee_id' => 7, 'code' => 'MUSPN07F', 'operating_system' => 'Win10', 'cpu' => 'i7', 'ram' => '16gb', 'hdd' => '500gb'],
            ['id' => 8, 'employee_id' => 8, 'code' => 'MUSPN08K', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 9, 'employee_id' => 9, 'code' => 'MUSPN09R', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 10, 'employee_id' => 10, 'code' => 'MUSPN01X', 'operating_system' => 'Win10', 'cpu' => 'i7', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 11, 'employee_id' => 11, 'code' => 'MUSPN02D', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 12, 'employee_id' => 12, 'code' => 'MUSPN03K', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 13, 'employee_id' => 13, 'code' => 'MUSPN04C', 'operating_system' => 'Win10', 'cpu' => 'i7', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 14, 'employee_id' => 14, 'code' => 'MUSPN05A', 'operating_system' => 'OsX', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 15, 'employee_id' => 15, 'code' => 'MUSPN06P', 'operating_system' => 'OsX', 'cpu' => 'i7', 'ram' => '16gb', 'hdd' => '500gb'],
            ['id' => 16, 'employee_id' => 16, 'code' => 'MUSPN07U', 'operating_system' => 'Ubuntu', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 17, 'employee_id' => 17, 'code' => 'MUSPN08S', 'operating_system' => 'Ubuntu', 'cpu' => 'i7', 'ram' => '16gb', 'hdd' => '500gb'],
            ['id' => 18, 'employee_id' => 18, 'code' => 'MUSPN09O', 'operating_system' => 'Ubuntu', 'cpu' => 'i5', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 19, 'employee_id' => 19, 'code' => 'MUSPN01T', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 20, 'employee_id' => 20, 'code' => 'MUSPN02V', 'operating_system' => 'Win10', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '256gb'],
            ['id' => 21, 'employee_id' => 21, 'code' => 'MUSPN03E', 'operating_system' => 'Win10', 'cpu' => 'i7', 'ram' => '16gb', 'hdd' => '500gb'],
            ['id' => 22, 'employee_id' => 22, 'code' => 'MUSPN04W', 'operating_system' => 'Win10', 'cpu' => 'i7', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 23, 'employee_id' => 23, 'code' => 'MUSPN05I', 'operating_system' => 'OsX', 'cpu' => 'i7', 'ram' => '16gb', 'hdd' => '256gb'],
            ['id' => 24, 'employee_id' => 24, 'code' => 'MUSPN06Y', 'operating_system' => 'OsX', 'cpu' => 'i7', 'ram' => '8gb', 'hdd' => '500gb'],
            ['id' => 25, 'employee_id' => 25, 'code' => 'MUSPN07G', 'operating_system' => 'OsX', 'cpu' => 'i5', 'ram' => '8gb', 'hdd' => '500gb'],
        ];

        foreach ($computers as $computer) {
            Computer::create($computer);
        }
    }
}
