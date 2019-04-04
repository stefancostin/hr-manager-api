<?php

use Illuminate\Database\Seeder;
use App\Incident;

class IncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incidents = [
            ['id' => 1, 'project_id' => 1, 'employee_id' => 1, 'code' => 'I0001', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.'],
            ['id' => 2, 'project_id' => 1, 'employee_id' => 2, 'code' => 'I0002', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.'],
            ['id' => 3, 'project_id' => 1, 'employee_id' => 2, 'code' => 'I0003', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 4, 'project_id' => 1, 'employee_id' => 3, 'code' => 'I0004', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.'],
            ['id' => 5, 'project_id' => 1, 'employee_id' => 4, 'code' => 'I0005', 'subject' => 'Validation', 'description' => 'Email validation failed.'],
            ['id' => 6, 'project_id' => 1, 'employee_id' => 4, 'code' => 'I0006', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 7, 'project_id' => 1, 'employee_id' => 5, 'code' => 'I0007', 'subject' => 'Images', 'description' => 'Images not found on homepage.'],
            ['id' => 8, 'project_id' => 1, 'employee_id' => 6, 'code' => 'I0008', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 9, 'project_id' => 1, 'employee_id' => 7, 'code' => 'I0009', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.'],
            ['id' => 10, 'project_id' => 2, 'employee_id' => 10, 'code' => 'I0001', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 11, 'project_id' => 2, 'employee_id' => 11, 'code' => 'I0002', 'subject' => 'Validation', 'description' => 'Unique code validation failed.'],
            ['id' => 12, 'project_id' => 2, 'employee_id' => 12, 'code' => 'I0003', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.'],
            ['id' => 13, 'project_id' => 2, 'employee_id' => 13, 'code' => 'I0004', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.'],
            ['id' => 14, 'project_id' => 2, 'employee_id' => 14, 'code' => 'I0005', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.'],
            ['id' => 15, 'project_id' => 2, 'employee_id' => 15, 'code' => 'I0006', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.'],
            ['id' => 16, 'project_id' => 2, 'employee_id' => 15, 'code' => 'I0007', 'subject' => 'Validation', 'description' => 'Unique code validation failed.'],
            ['id' => 17, 'project_id' => 2, 'employee_id' => 15, 'code' => 'I0008', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 18, 'project_id' => 2, 'employee_id' => 16, 'code' => 'I0009', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.'],
            ['id' => 19, 'project_id' => 2, 'employee_id' => 17, 'code' => 'I0010', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.'],
            ['id' => 20, 'project_id' => 3, 'employee_id' => 21, 'code' => 'I0001', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.'],
            ['id' => 21, 'project_id' => 3, 'employee_id' => 21, 'code' => 'I0002', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.'],
            ['id' => 22, 'project_id' => 3, 'employee_id' => 22, 'code' => 'I0003', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 23, 'project_id' => 3, 'employee_id' => 23, 'code' => 'I0004', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 24, 'project_id' => 3, 'employee_id' => 24, 'code' => 'I0005', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.'],
            ['id' => 25, 'project_id' => 3, 'employee_id' => 24, 'code' => 'I0006', 'subject' => 'Validation', 'description' => 'Email validation failed.'],
            ['id' => 26, 'project_id' => 3, 'employee_id' => 25, 'code' => 'I0007', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 27, 'project_id' => 3, 'employee_id' => 25, 'code' => 'I0008', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.'],
        ];

        foreach ($incidents as $incident) {
            Incident::create($incident);
        }
    }
}
