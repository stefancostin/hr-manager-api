<?php

use App\CompetenceCenter;
use App\Computer;
use App\Project;
use App\ProjectTeam;
use App\Role;
use App\Team;
use App\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    // $employee = new Employee();
    // $employee->name = 'toma';
    // $employee->email = 'toma@mail.com';
    // $employee->password = 'secret';
    // $employee->save();

    $employees = Employee::all();
    print_r($employees->toArray());
    die;
});


