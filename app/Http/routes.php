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

/**
*
*Routes for landing pages
*/

$app->get('/', 'PagesController@RedirectToHomepage');
$app->get('/sportsfete', 'PagesController@GetHomepage');
$app->get('/contacts', 'PagesController@GetContactsView');
$app->get('/scoreboard', 'PagesController@GetScoreboardView');
$app->get('/photos', 'PagesController@GetPhotosView');
$app->get('/events', 'PagesController@GetEventsView');
$app->get('/auth/login','PagesController@GetLoginView');
$app->get('/deptscore/{department_id}', 'PagesController@GetDepartmentScoreView');


/**
*
*API endpoints
*/
$app->get('/api/events/day/{day}','EventsController@GetEventsByDay');
$app->get('/api/events/day/{day}/department/{department}','EventsController@GetEventsByDepartment');
$app->get('/api/events/id/{id}','EventsController@GetEventById');
$app->post('/api/events/{event_id}/start', 'EventsController@StartEvent');
$app->post('/api/events/{event_id}/complete', 'EventsController@CompleteEvent');
$app->get('/api/events', 'EventsController@GetEvents');
$app->get('/api/events/list','EventsController@GetEventList');
$app->get('/api/events/department/{department_id}', 'EventsController@GetEventsByDepartmentDays');
$app->get('/api/scores','DepartmentsController@GetScores');
$app->get('/api/event/{event_id}/scores', 'ScoresController@GetEventsScores');
$app->get('/api/department/{department_id}/scores', 'ScoresController@GetDepartmentScores');
$app->get('/api/eventswisescores', 'ScoresController@getEventsWiseScores');
$app->get('/api/day', 'Controller@GetDay');
$app->get('/api/images', 'Controller@GetImages');
$app->post('/api/user/marathon/register', 'EventsController@MarathonRegister');


/**
*Auth route
*/
$app->post('/auth/login', 'UsersController@Login');


/**
*
*Protected routes
*/
$app->group(['middleware'=>'auth'], function($app) {
  $app->get('/auth/score','PagesController@GetScoreView');
  $app->get('/auth/dashboard','PagesController@GetAdminView');
  $app->get('/auth/logout', 'UsersController@Logout');
  $app->post('/auth/add/scores','DepartmentsController@AddScore');
});
