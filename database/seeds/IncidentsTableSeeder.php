<?php

use Illuminate\Database\Seeder;
use App\Incident;
use Carbon\Carbon;

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
            ['id' => 1, 'project_id' => 1, 'employee_id' => 1, 'code' => 'I0001', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.', 'created_at' => $this->creationDate('2018-01-05'), 'is_solved' => true],
            ['id' => 2, 'project_id' => 1, 'employee_id' => 2, 'code' => 'I0002', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'created_at' => $this->creationDate('2018-01-15'), 'is_solved' => true],
            ['id' => 3, 'project_id' => 1, 'employee_id' => 2, 'code' => 'I0003', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'created_at' => $this->creationDate('2018-01-20')],
            ['id' => 4, 'project_id' => 1, 'employee_id' => 3, 'code' => 'I0004', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'created_at' => $this->creationDate('2018-01-22')],
            ['id' => 5, 'project_id' => 1, 'employee_id' => 4, 'code' => 'I0005', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'created_at' => $this->creationDate('2018-01-24'), 'is_solved' => true],
            ['id' => 6, 'project_id' => 1, 'employee_id' => 4, 'code' => 'I0006', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-02-05')],
            ['id' => 7, 'project_id' => 1, 'employee_id' => 5, 'code' => 'I0007', 'subject' => 'Images', 'description' => 'Images not found on homepage.', 'created_at' => $this->creationDate('2018-02-06'), 'is_solved' => true],
            ['id' => 8, 'project_id' => 1, 'employee_id' => 6, 'code' => 'I0008', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'created_at' => $this->creationDate('2018-02-07')],
            ['id' => 9, 'project_id' => 1, 'employee_id' => 7, 'code' => 'I0009', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'created_at' => $this->creationDate('2018-02-08'), 'is_solved' => true],
            ['id' => 10, 'project_id' => 2, 'employee_id' => 1, 'code' => 'I0010', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'created_at' => $this->creationDate('2018-02-12'), 'is_solved' => true],
            ['id' => 11, 'project_id' => 2, 'employee_id' => 2, 'code' => 'I0011', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'created_at' => $this->creationDate('2018-02-14')],
            ['id' => 12, 'project_id' => 2, 'employee_id' => 2, 'code' => 'I0012', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.', 'created_at' => $this->creationDate('2018-02-15')],
            ['id' => 13, 'project_id' => 2, 'employee_id' => 1, 'code' => 'I0013', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.', 'created_at' => $this->creationDate('2018-02-16')],
            ['id' => 14, 'project_id' => 2, 'employee_id' => 4, 'code' => 'I0014', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.', 'created_at' => $this->creationDate('2018-02-18')],
            ['id' => 15, 'project_id' => 2, 'employee_id' => 7, 'code' => 'I0015', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.', 'created_at' => $this->creationDate('2018-02-20')],
            ['id' => 16, 'project_id' => 2, 'employee_id' => 8, 'code' => 'I0016', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'created_at' => $this->creationDate('2018-02-21'), 'is_solved' => true],
            ['id' => 17, 'project_id' => 2, 'employee_id' => 9, 'code' => 'I0017', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'created_at' => $this->creationDate('2018-02-22')],
            ['id' => 18, 'project_id' => 2, 'employee_id' => 5, 'code' => 'I0018', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.', 'created_at' => $this->creationDate('2018-03-05')],
            ['id' => 19, 'project_id' => 2, 'employee_id' => 3, 'code' => 'I0019', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.', 'created_at' => $this->creationDate('2018-03-06')],
            ['id' => 20, 'project_id' => 3, 'employee_id' => 10, 'code' => 'I0020', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'created_at' => $this->creationDate('2018-03-07'), 'is_solved' => true],
            ['id' => 21, 'project_id' => 3, 'employee_id' => 11, 'code' => 'I0021', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'created_at' => $this->creationDate('2018-03-08'), 'is_solved' => true],
            ['id' => 22, 'project_id' => 3, 'employee_id' => 12, 'code' => 'I0022', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-03-10')],
            ['id' => 23, 'project_id' => 3, 'employee_id' => 13, 'code' => 'I0023', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'created_at' => $this->creationDate('2018-03-12')],
            ['id' => 24, 'project_id' => 3, 'employee_id' => 14, 'code' => 'I0024', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'created_at' => $this->creationDate('2018-03-13')],
            ['id' => 25, 'project_id' => 3, 'employee_id' => 15, 'code' => 'I0025', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'created_at' => $this->creationDate('2018-03-15')],
            ['id' => 26, 'project_id' => 3, 'employee_id' => 16, 'code' => 'I0026', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'created_at' => $this->creationDate('2018-03-18'), 'is_solved' => true],
            ['id' => 27, 'project_id' => 3, 'employee_id' => 6, 'code' => 'I0027', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.', 'created_at' => $this->creationDate('2018-04-02'), 'is_solved' => true],
            ['id' => 28, 'project_id' => 3, 'employee_id' => 1, 'code' => 'I0028', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.', 'created_at' => $this->creationDate('2018-04-04')],
            ['id' => 29, 'project_id' => 3, 'employee_id' => 2, 'code' => 'I0029', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'created_at' => $this->creationDate('2018-04-05')],
            ['id' => 30, 'project_id' => 3, 'employee_id' => 2, 'code' => 'I0030', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'created_at' => $this->creationDate('2018-04-06')],
            ['id' => 31, 'project_id' => 3, 'employee_id' => 3, 'code' => 'I0031', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'created_at' => $this->creationDate('2018-04-07')],
            ['id' => 32, 'project_id' => 3, 'employee_id' => 4, 'code' => 'I0032', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'created_at' => $this->creationDate('2018-04-08'), 'is_solved' => true],
            ['id' => 33, 'project_id' => 3, 'employee_id' => 4, 'code' => 'I0033', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-04-09')],
            ['id' => 34, 'project_id' => 3, 'employee_id' => 5, 'code' => 'I0034', 'subject' => 'Images', 'description' => 'Images not found on homepage.', 'created_at' => $this->creationDate('2018-04-10')],
            ['id' => 35, 'project_id' => 3, 'employee_id' => 6, 'code' => 'I0035', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'created_at' => $this->creationDate('2018-04-12')],
            ['id' => 36, 'project_id' => 3, 'employee_id' => 7, 'code' => 'I0036', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'created_at' => $this->creationDate('2018-04-15'), 'is_solved' => true],
            ['id' => 37, 'project_id' => 4, 'employee_id' => 18, 'code' => 'I0037', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'created_at' => $this->creationDate('2018-05-02')],
            ['id' => 38, 'project_id' => 4, 'employee_id' => 17, 'code' => 'I0038', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'created_at' => $this->creationDate('2018-05-03'), 'is_solved' => true],
            ['id' => 39, 'project_id' => 4, 'employee_id' => 10, 'code' => 'I0039', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.', 'created_at' => $this->creationDate('2018-05-04'), 'is_solved' => true],
            ['id' => 40, 'project_id' => 4, 'employee_id' => 12, 'code' => 'I0040', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.', 'created_at' => $this->creationDate('2018-05-05')],
            ['id' => 41, 'project_id' => 4, 'employee_id' => 16, 'code' => 'I0041', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.', 'created_at' => $this->creationDate('2018-05-10')],
            ['id' => 42, 'project_id' => 4, 'employee_id' => 13, 'code' => 'I0042', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.', 'created_at' => $this->creationDate('2018-05-12')],
            ['id' => 43, 'project_id' => 5, 'employee_id' => 15, 'code' => 'I0043', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'created_at' => $this->creationDate('2018-06-02'), 'is_solved' => true],
            ['id' => 44, 'project_id' => 5, 'employee_id' => 11, 'code' => 'I0044', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'created_at' => $this->creationDate('2018-06-05')],
            ['id' => 45, 'project_id' => 5, 'employee_id' => 14, 'code' => 'I0045', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.', 'created_at' => $this->creationDate('2018-06-07')],
            ['id' => 46, 'project_id' => 5, 'employee_id' => 18, 'code' => 'I0046', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.', 'created_at' => $this->creationDate('2018-06-09')],
            ['id' => 47, 'project_id' => 5, 'employee_id' => 10, 'code' => 'I0047', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'created_at' => $this->creationDate('2018-06-12'), 'is_solved' => true],
            ['id' => 48, 'project_id' => 5, 'employee_id' => 12, 'code' => 'I0048', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'created_at' => $this->creationDate('2018-06-15')],
            ['id' => 49, 'project_id' => 5, 'employee_id' => 13, 'code' => 'I0049', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-06-18')],
            ['id' => 50, 'project_id' => 5, 'employee_id' => 15, 'code' => 'I0050', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'created_at' => $this->creationDate('2018-06-20'), 'is_solved' => true],
            ['id' => 51, 'project_id' => 5, 'employee_id' => 14, 'code' => 'I0051', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'created_at' => $this->creationDate('2018-06-24')],
            ['id' => 52, 'project_id' => 5, 'employee_id' => 17, 'code' => 'I0052', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'created_at' => $this->creationDate('2018-07-02')],
            ['id' => 53, 'project_id' => 5, 'employee_id' => 11, 'code' => 'I0053', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'created_at' => $this->creationDate('2018-07-05')],
            ['id' => 54, 'project_id' => 5, 'employee_id' => 10, 'code' => 'I0054', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.', 'created_at' => $this->creationDate('2018-07-08'), 'is_solved' => true],
            ['id' => 55, 'project_id' => 5, 'employee_id' => 19, 'code' => 'I0055', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-07-12')],
            ['id' => 56, 'project_id' => 5, 'employee_id' => 20, 'code' => 'I0056', 'subject' => 'Auhtorization', 'description' => 'User unable to login to app.', 'created_at' => $this->creationDate('2018-07-18')],
            ['id' => 57, 'project_id' => 5, 'employee_id' => 11, 'code' => 'I0057', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'created_at' => $this->creationDate('2018-07-24')],
            ['id' => 58, 'project_id' => 5, 'employee_id' => 12, 'code' => 'I0058', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'created_at' => $this->creationDate('2018-08-01')],
            ['id' => 59, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0059', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'created_at' => $this->creationDate('2018-08-04'), 'is_solved' => true],
            ['id' => 60, 'project_id' => 5, 'employee_id' => 14, 'code' => 'I0060', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'created_at' => $this->creationDate('2018-08-09')],
            ['id' => 61, 'project_id' => 5, 'employee_id' => 22, 'code' => 'I0061', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-08-12')],
            ['id' => 62, 'project_id' => 5, 'employee_id' => 16, 'code' => 'I0062', 'subject' => 'Images', 'description' => 'Images not found on homepage.', 'created_at' => $this->creationDate('2018-08-15')],
            ['id' => 63, 'project_id' => 5, 'employee_id' => 17, 'code' => 'I0063', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'created_at' => $this->creationDate('2018-08-24')],
            ['id' => 64, 'project_id' => 5, 'employee_id' => 10, 'code' => 'I0064', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'created_at' => $this->creationDate('2018-08-25')],
            ['id' => 65, 'project_id' => 4, 'employee_id' => 19, 'code' => 'I0065', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'created_at' => $this->creationDate('2018-09-10')],
            ['id' => 66, 'project_id' => 4, 'employee_id' => 20, 'code' => 'I0066', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'created_at' => $this->creationDate('2018-09-15')],
            ['id' => 67, 'project_id' => 4, 'employee_id' => 21, 'code' => 'I0067', 'subject' => 'Batch', 'description' => 'Queries inside batch job have been rolled back.', 'created_at' => $this->creationDate('2018-10-10')],
            ['id' => 68, 'project_id' => 4, 'employee_id' => 22, 'code' => 'I0068', 'subject' => 'Email', 'description' => 'Emails not being sent when subscription is made.', 'created_at' => $this->creationDate('2018-10-16'), 'is_solved' => true],
            ['id' => 69, 'project_id' => 4, 'employee_id' => 23, 'code' => 'I0069', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on tablet.', 'created_at' => $this->creationDate('2018-10-18')],
            ['id' => 70, 'project_id' => 4, 'employee_id' => 24, 'code' => 'I0070', 'subject' => 'Connection', 'description' => 'Connection failed between Oracle db and jdbc driver.', 'created_at' => $this->creationDate('2018-10-20')],
            ['id' => 71, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0071', 'subject' => 'Validation', 'description' => 'Unique code validation failed.', 'created_at' => $this->creationDate('2018-11-01')],
            ['id' => 72, 'project_id' => 5, 'employee_id' => 20, 'code' => 'I0072', 'subject' => 'Disabled', 'description' => 'Save address button is permanently disabled.', 'created_at' => $this->creationDate('2018-11-02')],
            ['id' => 73, 'project_id' => 5, 'employee_id' => 22, 'code' => 'I0073', 'subject' => 'Responsive', 'description' => 'Sidebar not being displayed on phone.', 'created_at' => $this->creationDate('2018-12-27')],
            ['id' => 74, 'project_id' => 5, 'employee_id' => 19, 'code' => 'I0074', 'subject' => 'Auhtorization', 'description' => 'User unable to login to application.', 'created_at' => $this->creationDate('2018-01-01')],
            ['id' => 75, 'project_id' => 5, 'employee_id' => 23, 'code' => 'I0075', 'subject' => 'Transaction', 'description' => 'All transactions have been rolled back.', 'created_at' => $this->creationDate('2018-05-01'), 'is_solved' => true],
            ['id' => 76, 'project_id' => 5, 'employee_id' => 24, 'code' => 'I0076', 'subject' => 'Notifications', 'description' => 'Notifications not sent correctly.', 'created_at' => $this->creationDate('2018-02-01')],
            ['id' => 77, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0077', 'subject' => 'Navigation', 'description' => 'Some routes are dead links.', 'created_at' => $this->creationDate('2018-02-01')],
            ['id' => 78, 'project_id' => 5, 'employee_id' => 19, 'code' => 'I0078', 'subject' => 'Database', 'description' => 'User_id column on app_users has only null values.', 'created_at' => $this->creationDate('2018-01-01')],
            ['id' => 79, 'project_id' => 5, 'employee_id' => 21, 'code' => 'I0079', 'subject' => 'Links', 'description' => 'Users complain about unclickable links.', 'created_at' => $this->creationDate('2018-01-01')],
            ['id' => 80, 'project_id' => 5, 'employee_id' => 24, 'code' => 'I0080', 'subject' => 'Validation', 'description' => 'Email validation failed.', 'created_at' => $this->creationDate('2018-01-01')],
            ['id' => 81, 'project_id' => 5, 'employee_id' => 22, 'code' => 'I0081', 'subject' => 'Grid', 'description' => 'Grid on homepage has double borders.', 'created_at' => $this->creationDate('2018-01-01')],
            ['id' => 82, 'project_id' => 5, 'employee_id' => 25, 'code' => 'I0082', 'subject' => 'Images', 'description' => 'Images not displaying correctly on contact page.', 'created_at' => $this->creationDate('2018-01-01')],
        ];

        foreach ($incidents as $incident) {
            Incident::create($incident);
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
