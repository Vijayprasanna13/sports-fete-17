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
date_default_timezone_set('Asia/Calcutta');
$app->get('/', 'PagesController@GetHomepage');

//view routes
$app->get('/contacts', 'PagesController@GetContactsView');
$app->get('/scoreboard', 'PagesController@GetScoreboardView');
$app->get('/photos', 'PagesController@GetPhotosView');
$app->get('/eventsList', 'PagesController@GetEventsListView');
$app->get('/deptscore/{department_id}', 'PagesController@GetDepartmentScoreView');



$app->get('/auth/login','PagesController@GetLoginView');
$app->post('/auth/login', 'UsersController@Login');


$app->get('/api/events','EventsController@GetEvents');
$app->get('/api/log','ScoresController@GetLog');
$app->get('/api/scores','DepartmentsController@GetScores');
$app->get('/api/day','Controller@GetDay');
$app->get('/api/eventscores', 'ScoresController@GetEventsScores');

/**
*
*Protected routes
*/
$app->group(['middleware'=>'auth'], function($app) {

  $app->get('/auth/add/score','PagesController@GetAddScoreView');
  $app->get('/auth/edit/score','PagesController@GetEditScoreView');
  $app->get('/auth/dashboard','PagesController@GetAdminView');
  $app->get('/auth/logout', 'UsersController@Logout');

  $app->post('/api/scores','DepartmentsController@UpdateScores');
	$app->post('/api/log','ScoresController@LogScores');

});
