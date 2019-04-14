<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Carbon\Carbon;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            ['id' => 1, 'role_id' => 1, 'team_id' => 1, 'first_name' => 'Dave', 'last_name' => 'Brubeck', 'email' => 'd.brubeck@mail.com', 'hiring_date' => $this->hiringDate('2018-01-01')],
            ['id' => 2, 'role_id' => 2, 'team_id' => 1, 'first_name' => 'Paul', 'last_name' => 'Chambers', 'email' => 'p.chambers@mail.com', 'hiring_date' => $this->hiringDate('2018-02-02')],
            ['id' => 3, 'role_id' => 4, 'team_id' => 1, 'first_name' => 'Jim', 'last_name' => 'Hall', 'email' => 'j.hall@mail.com', 'hiring_date' => $this->hiringDate('2018-02-18')],
            ['id' => 4, 'role_id' => 4, 'team_id' => 1, 'first_name' => 'Gilad', 'last_name' => 'Hekselman', 'email' => 'g.hekselman@mail.com', 'hiring_date' => $this->hiringDate('2018-02-28')],
            ['id' => 5, 'role_id' => 3, 'team_id' => 1, 'first_name' => 'Ron', 'last_name' => 'Carter', 'email' => 'r.carter@mail.com', 'hiring_date' => $this->hiringDate('2018-03-05')],
            ['id' => 6, 'role_id' => 5, 'team_id' => 1, 'first_name' => 'Sam', 'last_name' => 'Jones', 'email' => 's.jones@mail.com', 'hiring_date' => $this->hiringDate('2018-03-25')],
            ['id' => 7, 'role_id' => 6, 'team_id' => 1, 'first_name' => 'Oscar', 'last_name' => 'Petitford', 'email' => 'o.petit@mail.com', 'hiring_date' => $this->hiringDate('2018-04-15')],
            ['id' => 8, 'role_id' => 4, 'team_id' => 1, 'first_name' => 'Doug', 'last_name' => 'Watkins', 'email' => 'd.watkins@mail.com', 'hiring_date' => $this->hiringDate('2018-05-08')],
            ['id' => 9, 'role_id' => 4, 'team_id' => 1, 'first_name' => 'Hank', 'last_name' => 'Roberts', 'email' => 'h.roberts@mail.com', 'hiring_date' => $this->hiringDate('2018-05-20')],
            ['id' => 10, 'role_id' => 2, 'team_id' => 2, 'first_name' => 'Dave', 'last_name' => 'Gilmour', 'email' => 'd.gilmour@mail.com', 'hiring_date' => $this->hiringDate('2018-08-28')],
            ['id' => 11, 'role_id' => 1, 'team_id' => 2, 'first_name' => 'Roger', 'last_name' => 'Waters', 'email' => 'r.waters@mail.com', 'hiring_date' => $this->hiringDate('2018-06-08')],
            ['id' => 12, 'role_id' => 3, 'team_id' => 2, 'first_name' => 'Nick', 'last_name' => 'Mason', 'email' => 'n.mason@mail.com', 'hiring_date' => $this->hiringDate('2018-06-16')],
            ['id' => 13, 'role_id' => 3, 'team_id' => 2, 'first_name' => 'Richard', 'last_name' => 'Wright', 'email' => 'r.wright@mail.com', 'hiring_date' => $this->hiringDate('2018-01-21')],
            ['id' => 14, 'role_id' => 5, 'team_id' => 2, 'first_name' => 'Syd', 'last_name' => 'Barrett', 'email' => 's.barrett@mail.com', 'hiring_date' => $this->hiringDate('2018-07-02')],
            ['id' => 15, 'role_id' => 5, 'team_id' => 2, 'first_name' => 'Jimmy', 'last_name' => 'Page', 'email' => 'j.page@mail.com', 'hiring_date' => $this->hiringDate('2018-08-15')],
            ['id' => 16, 'role_id' => 6, 'team_id' => 2, 'first_name' => 'Robert', 'last_name' => 'Plant', 'email' => 'r.plant@mail.com', 'hiring_date' => $this->hiringDate('2018-08-20')],
            ['id' => 17, 'role_id' => 7, 'team_id' => 2, 'first_name' => 'Paul', 'last_name' => 'Jones', 'email' => 'p.jones@mail.com', 'hiring_date' => $this->hiringDate('2018-02-21')],
            ['id' => 18, 'role_id' => 7, 'team_id' => 2, 'first_name' => 'John', 'last_name' => 'Bonham', 'email' => 'j.bonham@mail.com', 'hiring_date' => $this->hiringDate('2018-09-05')],
            ['id' => 19, 'role_id' => 1, 'team_id' => 3, 'first_name' => 'Ian', 'last_name' => 'Gillan', 'email' => 'i.gillan@mail.com', 'hiring_date' => $this->hiringDate('2018-09-15')],
            ['id' => 20, 'role_id' => 2, 'team_id' => 3, 'first_name' => 'Ritchie', 'last_name' => 'Blackmore', 'email' => 'r.black@mail.com', 'hiring_date' => $this->hiringDate('2018-09-18')],
            ['id' => 21, 'role_id' => 7, 'team_id' => 3, 'first_name' => 'Roger', 'last_name' => 'Glover', 'email' => 'r.glover@mail.com', 'hiring_date' => $this->hiringDate('2018-09-20')],
            ['id' => 22, 'role_id' => 7, 'team_id' => 3, 'first_name' => 'Steve', 'last_name' => 'Morse', 'email' => 's.morse@mail.com', 'hiring_date' => $this->hiringDate('2018-10-21')],
            ['id' => 23, 'role_id' => 8, 'team_id' => 3, 'first_name' => 'David', 'last_name' => 'Coverdale', 'email' => 'd.coverdale@mail.com', 'hiring_date' => $this->hiringDate('2018-11-01')],
            ['id' => 24, 'role_id' => 8, 'team_id' => 3, 'first_name' => 'Joe', 'last_name' => 'Satriani', 'email' => 'j.satriani@mail.com', 'hiring_date' => $this->hiringDate('2018-07-12')],
            ['id' => 25, 'role_id' => 8, 'team_id' => 3, 'first_name' => 'Steve', 'last_name' => 'Vai', 'email' => 's.vai@mail.com', 'hiring_date' => $this->hiringDate('2018-06-01')],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }

    /**
     * Insert hiring date into seed.
     *
     * @param string 'yyyy-mm-dd'
     * @return Carbon-Formated Date
     */
    private function hiringDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date);
    }
}
