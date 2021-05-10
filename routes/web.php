<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', 'StudentController@index');

Route::get('/view', 'StudentController@getAll');
Route::get('student/{id}', 'StudentController@getStudentById');

Route::get('/register', 'StudentController@register');
Route::post('/register', 'StudentController@registerStudent');

Route::view('/login', 'login');
Route::post('/login', 'StudentController@login');

Route::get('/logout', 'StudentController@logout');
