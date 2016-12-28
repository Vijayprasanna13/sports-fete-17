<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'PagesController@GetHomepage');
//view routes
$app->get('/contacts', 'PagesController@GetContactsView');
$app->get('/scoreboard', 'PagesController@GetScoreboardView');
$app->get('/photos', 'PagesController@GetPhotosView');
$app->get('/eventsList', 'PagesController@GetEventsListView');
$app->get('/auth/login','PagesController@GetLoginView');
$app->post('/auth/login', 'UsersController@Login');
$app->get('/auth/departmentCreate', 'PagesController@GetDepartmentCreateView');


$app->get('/api/events','EventsController@GetEvents');// get the events list
$app->get('/api/log','ScoresController@GetLog'); //get score log for an department
$app->get('/api/scores','DepartmentsController@GetScores'); //get the scores of all departments
$app->get('/api/day','Controller@GetDay'); //get current day
$app->get('api/eventscores', 'ScoresController@GetEventsScores'); //get individual scores of all events

//API routes
$app->group(['middleware'=>'auth'], function($app) {
  $app->get('/auth/event','PagesController@GetEventView');
  $app->get('/auth/dashboard','PagesController@GetAdminView');
	$app->post('/api/scores','DepartmentsController@UpdateScores'); //update the scores for department
	$app->post('/api/department','DepartmentsController@CreateDepartment'); //post a new score record for a department
	$app->post('/api/log','ScoresController@LogScores'); //log the updation of score for event and department
  $app->get('/auth/logout', 'UsersController@Logout');
});
