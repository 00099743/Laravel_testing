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

Route::get('/', 'HomeController@showWelcome');
//Route::get('/', array ( 'before' => 'birthdate:03/01' ,
//    function()
//{
//	$theLandmarks = array("St. Marks","Brooklyn Heights","Central Park","Times Square");
//        return View::make('hello', array('theLocation' => 'NYC', 'theWeather'=> 'stormy', 'theLandmarks' => $theLandmarks ));
//}));

Route::get('about', 'AboutController@showAbout');

Route::get('programs', function()
{
	return View::make('programs');
});

Route::get('graphic-design', function()
{
	return View::make('graphic-design');
});

Route::get('signup', function()
{
	return View::make('signup');
});

Route::post('thanks',function()
{
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail', $theEmail);
});

Route::post('signup',function()
{
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail', $theEmail);
});

//Route::get('about', function()
//{
//	return 'About Content';
//});
//
//Route::get('about/{theSubject}/{check}', function($theSubject,$check)
//{
//	return $theSubject.'About Content'.$check;
//});

