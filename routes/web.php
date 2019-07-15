<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/', 'VideosController@getVideo');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/messages', 'MessagesController@getAllMessages');
Route::get('/video', function () {
    return view('addvideo');
});
Route::get('/addteam', function(){
	return view('addteam');
});

Route::post('/contact/submit', 'MessagesController@submit');
Route::post('/video/save', 'VideosController@saveVideo');
//Teams
Route::post('/team/save', 'TeamsController@saveTeam');
Route::get('/team/{id}', ['uses' => 'TeamsController@getTeam']);
Route::get('/team', ['uses' => 'TeamsController@getTeam']);
Route::get('/orderteam', ['uses' => 'TeamsController@orderTeam']);
Route::post('/team/order',  'TeamsController@orderTeam');

//ADMIN
Route::get('/admin/login',['uses' => 'UserController@login']);
Route::post('/admin/loginuser', 'UserController@login');
