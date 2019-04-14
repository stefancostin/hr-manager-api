<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('competence-centers', 'CompetenceCenterController')->only(["index", "store", "show", "update", "destroy"]);

Route::resource('computers', 'ComputerController')->only(["index", "store", "show", "update", "destroy"]);

Route::resource('employees', 'EmployeeController')->only(["index", "store", "show", "update", "destroy"]);

Route::resource('incidents', 'IncidentController')->only(["index", "store", "show", "update", "destroy"]);

Route::resource('projects', 'ProjectController')->only(["index", "store", "show", "update", "destroy"]);

Route::resource('roles', 'RoleController')->only(["index", "store", "show", "update", "destroy"]);

Route::resource('teams', 'TeamController')->only(["index", "store", "show", "update", "destroy"]);

Route::get('employees-without-computer', 'EmployeeController@withoutComputer');

Route::get('project-members/{project}', 'ProjectController@projectMembers');

Route::get('statistics/team-activity', 'StatisticController@teamActivity');

Route::get('statistics/project-activity', 'StatisticController@projectActivity');

Route::get('statistics/total-incidents', 'StatisticController@totalIncidents');

Route::get('statistics/assigned-employees', 'StatisticController@employeesAssignedToIncidents');

Route::get('statistics/timeline-chart', 'StatisticController@timelineChart');

Route::get('statistics/compare-chart', 'StatisticController@compareChart');
