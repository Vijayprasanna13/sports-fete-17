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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/key',function(){
  return str_random(32);
});

//view routes
$app->get('/auth/login','PagesController@GetLoginView');
$app->post('/auth/login', 'UsersController@Login');
$app->get('/test','DepartmentsController@GetScoreByPosition');
$app->get('/auth/departmentCreate', 'PagesController@GetDepartmentCreateView');
//API routes
$app->group(['middleware'=>'auth'], function($app) {
  $app->get('/auth/event','PagesController@GetEventView');
  $app->get('/auth/dashboard','PagesController@GetAdminView');
	$app->get('/api/events','EventsController@GetEvents');// get the events list
	$app->get('/api/scores','DepartmentsController@GetScores'); //get the scores of all departments
	$app->post('/api/scores','DepartmentsController@UpdateScores'); //update the scores for department
	$app->post('/api/department','DepartmentsController@CreateDepartment'); //post a new score record for a department
	$app->post('/api/log','ScoresController@LogScores'); //log the updation of score for event and department
	$app->get('/api/log','ScoresController@GetLog'); //get score log for an department
  $app->get('/auth/logout', 'UsersController@Logout');
});
