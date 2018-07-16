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

Route::get('/todos', [
'uses' => 'TodosController@index',
'as' => 'todos'

]);

Route::post('/create/todos', [
'uses' => 'TodosController@store'
]);

Route::get('/delete/todos/{id}', [
'uses' => 'TodosController@delete',
'as' => 'delete.todo'
]);
Route::get('/update/todos/{id}', [
'uses' => 'TodosController@update',
'as' => 'update.todo'
]);
Route::post('/save/todos/{id}', [
'uses' => 'TodosController@save',
'as' => 'save.todos'
]);
