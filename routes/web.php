<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getIndex')->name('index');

Route::get('experience', 'PagesController@getExperience')->name('experience');

Route::get('education', 'PagesController@getEducation')->name('education');

Route::get('contact', 'PagesController@getContact')->name('contact');

Route::get('test', 'JobsController@getTest')->name('test');

Route::resource('skills', 'SkillsController');

Route::resource('jobs', 'JobsController');

Route::resource('schools', 'SchoolsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
