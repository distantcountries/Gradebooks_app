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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/register', 'Auth\RegisterController@register');

// Route::resource('gradebooks', 'GradebooksController');
// Route::resource('users', 'UsersController');
// Route::resource('comments', 'CommentsController');




Route::middleware('jwt')->resource('gradebooks', 'GradebooksController');
Route::middleware('jwt')->resource('users', 'UsersController');
Route::middleware('jwt')->resource('comments', 'CommentsController');

