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
/*
Route::get('/', function () {
    //return view('welcome');
    
});
*/
Route::get('/','ArticlesController@index');


Route::get('service', function()
{
    return View::make('service');
});

Route::get('about', function()
{
    return View::make('about');
});

Route::get('test', function()
{
    return View::make('test');
});

Route::get('users','UsersController@index');
Route::get('users/create','UsersController@create');
Route::post('users/store','UsersController@store');
Route::get('users/edit/{id}','UsersController@edit');
Route::post('users/update/{id}','UsersController@update');
Route::get('users/show/{id}','UsersController@show');
Route::post('users/destroy/{id}','UsersController@destroy');

Route::get('articles','ArticlesController@index');
Route::get('articles/display','ArticlesController@display');
Route::get('articles/show/{id}','ArticlesController@show');

Route::get('gyosei','GyoseiController@index');
