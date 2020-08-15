<?php

use Illuminate\Support\Facades\Route;

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
// Closure - cannot cache routes
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trainings', 'TrainingController@index')->name('training.index');
Route::get('/trainings/create', 'TrainingController@create')->name('training.create');
Route::post('/trainings/create', 'TrainingController@store')->name('training.store');
Route::get('/trainings/{training}', 'TrainingController@show')->name('training.show');
Route::get('/trainings/edit/{training}', 'TrainingController@edit')->name('training.edit');
Route::post('/trainings/edit/{training}', 'TrainingController@update')->name('training.update');
Route::get('/trainings/{training}/delete', 'TrainingController@delete')->name('training.delete');

Route::get('/users', 'UserController@index')->name('user.index');
