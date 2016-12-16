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

Route::get('/', function () {
    return view('welcome');
});

Route::get('endpage', 'PagesController@endpage');
Route::get('about', 'PagesController@about');
Route::get('vragen', 'VragenController@index');
Route::get('inleiding', 'PagesController@inleiding');
Route::get('disclaimer', 'PagesController@disclaimer');
Route::get('privacystatement', 'PagesController@privacy');
Route::post('vragen', 'VragenController@store');

Route::get('userenquete', 'UserEnquetesController@index');
Route::get('userenquete2', 'UserEnquetes2Controller@index');
Route::get('userenquete3', 'UserEnquetes3Controller@index');
Route::post('userenquete', 'UserEnquetesController@store');
Route::post('userenquete2', 'UserEnquetes2Controller@store');
Route::post('userenquete3', 'UserEnquetes3Controller@store');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::patch('home', array('as' => 'home', 'uses' => function(){
  return view('home');
}));

Route::get('/home', function () {
     return view('inleiding');
});


