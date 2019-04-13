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
            ['id' => 1, 'project_id' => 1, 'employee_id' => 1, 'code' => 'I0001', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.', 'is_solved' => true],
            ['id' => 2, 'project_id' => 1, 'employee_id' => 2, 'code' => 'I0002', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'is_solved' => true],
            ['id' => 3, 'project_id' => 1, 'employee_id' => 2, 'code' => 'I0003', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 4, 'project_id' => 1, 'employee_id' => 3, 'code' => 'I0004', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.'],
            ['id' => 5, 'project_id' => 1, 'employee_id' => 4, 'code' => 'I0005', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'is_solved' => true],
            ['id' => 6, 'project_id' => 1, 'employee_id' => 4, 'code' => 'I0006', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 7, 'project_id' => 1, 'employee_id' => 5, 'code' => 'I0007', 'subject' => 'Images', 'description' => 'Images not found on homepage.', 'is_solved' => true],
            ['id' => 8, 'project_id' => 1, 'employee_id' => 6, 'code' => 'I0008', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 9, 'project_id' => 1, 'employee_id' => 7, 'code' => 'I0009', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'is_solved' => true],
            ['id' => 10, 'project_id' => 2, 'employee_id' => 1, 'code' => 'I0010', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'is_solved' => true],
            ['id' => 11, 'project_id' => 2, 'employee_id' => 2, 'code' => 'I0011', 'subject' => 'Validation', 'description' => 'Unique code validation failed.'],
            ['id' => 12, 'project_id' => 2, 'employee_id' => 2, 'code' => 'I0012', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.'],
            ['id' => 13, 'project_id' => 2, 'employee_id' => 1, 'code' => 'I0013', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.'],
            ['id' => 14, 'project_id' => 2, 'employee_id' => 4, 'code' => 'I0014', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.'],
            ['id' => 15, 'project_id' => 2, 'employee_id' => 7, 'code' => 'I0015', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.'],
            ['id' => 16, 'project_id' => 2, 'employee_id' => 8, 'code' => 'I0016', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'is_solved' => true],
            ['id' => 17, 'project_id' => 2, 'employee_id' => 9, 'code' => 'I0017', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 18, 'project_id' => 2, 'employee_id' => 5, 'code' => 'I0018', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.'],
            ['id' => 19, 'project_id' => 2, 'employee_id' => 3, 'code' => 'I0019', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.'],
            ['id' => 20, 'project_id' => 3, 'employee_id' => 10, 'code' => 'I0020', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'is_solved' => true],
            ['id' => 21, 'project_id' => 3, 'employee_id' => 11, 'code' => 'I0021', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'is_solved' => true],
            ['id' => 22, 'project_id' => 3, 'employee_id' => 12, 'code' => 'I0022', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 23, 'project_id' => 3, 'employee_id' => 13, 'code' => 'I0023', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 24, 'project_id' => 3, 'employee_id' => 14, 'code' => 'I0024', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.'],
            ['id' => 25, 'project_id' => 3, 'employee_id' => 15, 'code' => 'I0025', 'subject' => 'Validation', 'description' => 'Email validation failed.'],
            ['id' => 26, 'project_id' => 3, 'employee_id' => 16, 'code' => 'I0026', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'is_solved' => true],
            ['id' => 27, 'project_id' => 3, 'employee_id' => 6, 'code' => 'I0027', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.', 'is_solved' => true],
            ['id' => 28, 'project_id' => 3, 'employee_id' => 1, 'code' => 'I0028', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.'],
            ['id' => 29, 'project_id' => 3, 'employee_id' => 2, 'code' => 'I0029', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.'],
            ['id' => 30, 'project_id' => 3, 'employee_id' => 2, 'code' => 'I0030', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 31, 'project_id' => 3, 'employee_id' => 3, 'code' => 'I0031', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.'],
            ['id' => 32, 'project_id' => 3, 'employee_id' => 4, 'code' => 'I0032', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'is_solved' => true],
            ['id' => 33, 'project_id' => 3, 'employee_id' => 4, 'code' => 'I0033', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 34, 'project_id' => 3, 'employee_id' => 5, 'code' => 'I0034', 'subject' => 'Images', 'description' => 'Images not found on homepage.'],
            ['id' => 35, 'project_id' => 3, 'employee_id' => 6, 'code' => 'I0035', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 36, 'project_id' => 3, 'employee_id' => 7, 'code' => 'I0036', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'is_solved' => true],
            ['id' => 37, 'project_id' => 4, 'employee_id' => 18, 'code' => 'I0037', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 38, 'project_id' => 4, 'employee_id' => 17, 'code' => 'I0038', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'is_solved' => true],
            ['id' => 39, 'project_id' => 4, 'employee_id' => 10, 'code' => 'I0039', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.', 'is_solved' => true],
            ['id' => 40, 'project_id' => 4, 'employee_id' => 12, 'code' => 'I0040', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.'],
            ['id' => 41, 'project_id' => 4, 'employee_id' => 16, 'code' => 'I0041', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.'],
            ['id' => 42, 'project_id' => 4, 'employee_id' => 13, 'code' => 'I0042', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.'],
            ['id' => 43, 'project_id' => 5, 'employee_id' => 15, 'code' => 'I0043', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'is_solved' => true],
            ['id' => 44, 'project_id' => 5, 'employee_id' => 11, 'code' => 'I0044', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 45, 'project_id' => 5, 'employee_id' => 14, 'code' => 'I0045', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.'],
            ['id' => 46, 'project_id' => 5, 'employee_id' => 18, 'code' => 'I0046', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.'],
            ['id' => 47, 'project_id' => 5, 'employee_id' => 10, 'code' => 'I0047', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'is_solved' => true],
            ['id' => 48, 'project_id' => 5, 'employee_id' => 12, 'code' => 'I0048', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.'],
            ['id' => 49, 'project_id' => 5, 'employee_id' => 13, 'code' => 'I0049', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 50, 'project_id' => 5, 'employee_id' => 15, 'code' => 'I0050', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'is_solved' => true],
            ['id' => 51, 'project_id' => 5, 'employee_id' => 14, 'code' => 'I0051', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.'],
            ['id' => 52, 'project_id' => 5, 'employee_id' => 17, 'code' => 'I0052', 'subject' => 'Validation', 'description' => 'Email validation failed.'],
            ['id' => 53, 'project_id' => 5, 'employee_id' => 11, 'code' => 'I0053', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 54, 'project_id' => 5, 'employee_id' => 10, 'code' => 'I0054', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.', 'is_solved' => true],
            ['id' => 55, 'project_id' => 5, 'employee_id' => 19, 'code' => 'I0055', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 56, 'project_id' => 5, 'employee_id' => 20, 'code' => 'I0056', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.'],
            ['id' => 57, 'project_id' => 5, 'employee_id' => 11, 'code' => 'I0057', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.'],
            ['id' => 58, 'project_id' => 5, 'employee_id' => 12, 'code' => 'I0058', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 59, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0059', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'is_solved' => true],
            ['id' => 60, 'project_id' => 5, 'employee_id' => 14, 'code' => 'I0060', 'subject' => 'Validation', 'description' => 'Email validation failed.'],
            ['id' => 61, 'project_id' => 5, 'employee_id' => 22, 'code' => 'I0061', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 62, 'project_id' => 5, 'employee_id' => 16, 'code' => 'I0062', 'subject' => 'Images', 'description' => 'Images not found on homepage.'],
            ['id' => 63, 'project_id' => 5, 'employee_id' => 17, 'code' => 'I0063', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 64, 'project_id' => 5, 'employee_id' => 10, 'code' => 'I0064', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.'],
            ['id' => 65, 'project_id' => 4, 'employee_id' => 19, 'code' => 'I0065', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 66, 'project_id' => 4, 'employee_id' => 20, 'code' => 'I0066', 'subject' => 'Validation', 'description' => 'Unique code validation failed.'],
            ['id' => 67, 'project_id' => 4, 'employee_id' => 21, 'code' => 'I0067', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.'],
            ['id' => 68, 'project_id' => 4, 'employee_id' => 22, 'code' => 'I0068', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.', 'is_solved' => true],
            ['id' => 69, 'project_id' => 4, 'employee_id' => 23, 'code' => 'I0069', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.'],
            ['id' => 70, 'project_id' => 4, 'employee_id' => 24, 'code' => 'I0070', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.'],
            ['id' => 71, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0071', 'subject' => 'Validation', 'description' => 'Unique code validation failed.'],
            ['id' => 72, 'project_id' => 5, 'employee_id' => 20, 'code' => 'I0072', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.'],
            ['id' => 73, 'project_id' => 5, 'employee_id' => 22, 'code' => 'I0073', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.'],
            ['id' => 74, 'project_id' => 5, 'employee_id' => 19, 'code' => 'I0074', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.'],
            ['id' => 75, 'project_id' => 5, 'employee_id' => 23, 'code' => 'I0075', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'is_solved' => true],
            ['id' => 76, 'project_id' => 5, 'employee_id' => 24, 'code' => 'I0076', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.'],
            ['id' => 77, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0077', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.'],
            ['id' => 78, 'project_id' => 5, 'employee_id' => 19, 'code' => 'I0078', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.'],
            ['id' => 79, 'project_id' => 5, 'employee_id' => 21, 'code' => 'I0079', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.'],
            ['id' => 80, 'project_id' => 5, 'employee_id' => 24, 'code' => 'I0080', 'subject' => 'Validation', 'description' => 'Email validation failed.'],
            ['id' => 81, 'project_id' => 5, 'employee_id' => 22, 'code' => 'I0081', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.'],
            ['id' => 82, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0082', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.'],
        ];

        foreach ($incidents as $incident) {
            Incident::create($incident);
        }
    }
}
