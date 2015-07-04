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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/contact', 'ContactController@show');
Route::get('/find-a-job', 'ApplicationController@index');
Route::get('/apply/cita', 'EnrolController@index');
Route::get('/request/quote', 'QuoteController@index');

Route::post('/contact', 'ContactController@save');
Route::post('/find-a-job', 'ApplicationController@save');
Route::post('/appy/cita', 'EnrolController@save');
Route::post('/newsletter/subscribe', 'SubscriptionController@subscribe');

Route::get('/{name}', function($name)
{
		if (View::exists($name))
    	   return View::make($name);
		return View::make('error')->with(['message'=>'Page not found', 'breadcrumb'=>'contact', 'error_title'=>'Something\'s <span>not</span> right']);
});