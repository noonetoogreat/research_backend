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

Route::get('/', function()
{
    $data = Session::get('data');
    return View::make('user')->with('data', $data);
});

Route::get('user/login', array('uses'=> 'UserController@login'));
Route::post('user/linkedin_complete', array(
	'before' => 'csrf',
	'as' => 'linkedin_complete_post',
	'uses' => 'UserController@linkedinCompletePost'
));