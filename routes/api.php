<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/gradebooks', 'GradebooksController@index');
Route::middleware('jwt')->post('/gradebooks', 'GradebooksController@store');
Route::get('/gradebooks/{id}', 'GradebooksController@show');
Route::middleware('jwt')->delete('/gradebooks/{id}', 'GradebooksController@destroy');
Route::resource('users', 'UsersController');
Route::middleware('jwt')->resource('comments', 'CommentsController');
