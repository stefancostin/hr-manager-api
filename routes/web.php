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

Route::post('/factory', function () {
    // Populate DB
    factory(CompetenceCenter::class, 5)->create();
    factory(Team::class, 5)->create();
    // factory(Project::class, 5)->create();
    // factory(ProjectTeam::class, 5)->create();
    // factory(Role::class, 5)->create();
    // factory(Computer::class, 5)->create();
    echo "Populate successful!";
});

Route::get('/factory', function () {
    // Get Data
    $competenceCenters = CompetenceCenter::all();
    $computers = Computer::all();
    $projects = Project::all();
    $projectTeamPivot = ProjectTeam::all();
    $roles = Role::all();
    $teams = Team::all();
    $employees = Employee::all();

    // Display Data
    // echo csrf_token();
    echo "<b>Roles: </b>" . "<pre>";
    print_r($roles->toArray());
    echo "</pre> <br/>" . "<br/>" . "<b>Users: </b>" . "<pre>";
    print_r($employees->toArray());
    echo "</pre> <br/>" . "<br/>" . "<b>Computers: </b>" . "<pre>";
    print_r($computers->toArray());
    echo "</pre> <br/>" . "<br/>" . "<b>Competence Centers: </b>" . "<pre>";
    print_r($competenceCenters->toArray());
    echo "</pre> <br/>" . "<br/>" . "<b>Teams: </b>" . "<pre>";
    print_r($teams->toArray());
    echo "</pre> <br/>" . "<br/>" . "<b>Projects: </b>" . "<pre>";
    print_r($projects->toArray());
    echo "</pre> <br/>" . "<br/>" . "<b>ProjectTeam Pivot: </b>" . "<pre>";
    print_r($projectTeamPivot->toArray());
    die;
});

