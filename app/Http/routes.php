<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/Grid', 'BootGridDatasController@GridDateindex');
Route::get('/Jquery', 'BootGridDatasController@Jqueryindex');
Route::post('/editItem', 'BootGridDatasController@Jqueryedit');


Route::post ( '/createItem', 'BootGridDatasController@Jquerystore' );
Route::post ( '/deleteItem', 'BootGridDatasController@Jquerydestroy');
