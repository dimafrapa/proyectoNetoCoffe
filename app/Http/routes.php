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

	Route::get('/', function () {
	    return view('welcome');
	});


    Route::get('error', function(){
        abort(500);
    });

	Route::group(['prefix' => 'netocafe', 'middleware' => 'auth'], function () {

        Route::resource('baristas', 'BaristasController');
        Route::get('baristas/{id_barista}/destroy', ['uses' => 'BaristasController@destroy', 'as' => 'netocafe.baristas.destroy']);
        Route::get('baristas/{id_barista}/edit', ['uses' => 'BaristasController@edit', 'as' => 'netocafe.baristas.edit']);
        Route::post('baristas/{id_barista}/update', ['uses' => 'BaristasController@update', 'as' => 'netocafe.baristas.update']);
    });

    Route::auth();