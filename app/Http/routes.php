<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

//Provide controllermethods with object instead of ID
Route::model('tasks','Task');
Route::model('projects','Project');

//use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route){
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route){
    return App\Project::whereSlug($value)->first();
});


Route::resource('users.projects', 'ProjectsController');
//Route::resource('tasks','TasksController');
Route::resource('projects.tasks','TasksController');

