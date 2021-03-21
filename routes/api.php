<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/students/{id}', 'StudentController@show')->name('api.students.show');
Route::put('/students/{id}', 'StudentController@update')->name('api.students.update');
Route::delete('/students/{id}', 'StudentController@destroy')->name('api.students.destroy');
Route::post('/students', 'StudentController@store')->name('api.students.store');
Route::get('/students', 'StudentController@index')->name('api.students.index');
