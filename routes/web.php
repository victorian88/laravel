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
/*
Route::get('/', function () {
    return view('home');
});
*/

Auth::routes();

Route::get('/', 'PagesController@home')->name('home');
Route::get('/contactos', 'PagesController@contactos')->name('contactos');
Route::post('contacto', 'PagesController@mensajes')->name('contacto');
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store')->name('tasks.store');
Route::delete('/tasks/{id}', 'TaskController@destroy')->name('tasks.destroy');
Route::get('/tasks/{id}', 'TaskController@editView')->name('tasks.edit_view');
Route::get('/tasks/edit/{id}', 'TaskController@edit')->name('tasks.edit');
