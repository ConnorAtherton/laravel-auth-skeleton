<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function () {  

    return View::make('index'); 

}));

/*
|--------------------------------------------------------------------------
| User Authentication Routes
|--------------------------------------------------------------------------
| 
| These are the routes used for user authentication 
|
*/

Route::get('login', array('as' => 'login', 'uses' => 'SessionsController@index'));
Route::post('login', array('uses' => 'SessionsController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionsController@destroy'));


Route::get('profile', array('as' => 'profile', function () { 

    return View::make('users.profile');

}))->before('auth');





