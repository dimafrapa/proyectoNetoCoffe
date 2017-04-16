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
        if (Auth::check())
        {
            return view('home');
        }
        else
            return view('auth.login');

    });


    Route::get('error', function(){
        abort(500);
    });


    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::resource('baristas', 'BaristasController');
        Route::get('baristas/{id}/destroy', ['uses' => 'BaristasController@destroy', 'as' => 'admin.baristas.destroy']);
        Route::get('baristas/{id}/show', ['uses' => 'BaristasController@show', 'as' => 'admin.baristas.show']);
        Route::get('baristas/{id}/edit', ['uses' => 'BaristasController@edit', 'as' => 'admin.baristas.edit']);
        Route::post('baristas/{id}/update', ['uses' => 'BaristasController@update', 'as' => 'admin.baristas.update']);

    });

    Route::auth();
