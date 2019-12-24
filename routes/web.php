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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tests', 'TestsController'); 
Route::resource('questions', 'QuestionsController'); 

Route::post('user/tests', 'UserTestsController@store')->name('user.test.store'); 

Route::get('results', 'ResultsController@index')->name('results.index'); 
Route::get('results/{id}', 'ResultsController@show')->name('results.show'); 

