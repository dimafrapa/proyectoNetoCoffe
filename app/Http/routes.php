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

/*
    ESTE ES EL CONJUNTO DE RUTAS PARA QUE EL CONTROLADOR PUEDA TOMAR TODAS LAS ACCIONES O MÉTODOS LLAMADOS DESDE LAS VISTAS.
    ESTAS RUTAS SIRVEN PARA CONECTAR LA LOGICA CON LAS VISTAS REALIZADAS EN LA CARPETA RESOURCES.
*/

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

/*
GRUPO DE RUTAS PARA EL CONTROLADOR DE LOS BARISTAS, ESTAS RUTAS PERMITEN LA NAVEGACION Y LA REALIZACION DE TODOS LOS CRUDS PARA UN BARISTA.
*/
        Route::resource('baristas', 'BaristasController');
        Route::get('baristas/{id}/destroy', ['uses' => 'BaristasController@destroy', 'as' => 'admin.baristas.destroy']);
        Route::get('baristas/{id}/show', ['uses' => 'BaristasController@show', 'as' => 'admin.baristas.show']);
        Route::get('baristas/{id}/edit', ['uses' => 'BaristasController@edit', 'as' => 'admin.baristas.edit']);
        Route::post('baristas/{id}/update', ['uses' => 'BaristasController@update', 'as' => 'admin.baristas.update']);

/*
GRUPO DE RUTAS PARA EL CONTROLADOR DE LOS INGREDIENTES, ESTAS RUTAS PERMITEN LA NAVEGACION Y LA REALIZACION DE TODOS LOS CRUDS PARA UN INGREDIENTE.
*/
        Route::resource('ingredientes', 'IngredientesController');
        Route::get('ingredientes/{id}/destroy', ['uses' => 'IngredientesController@destroy', 'as' => 'admin.ingredientes.destroy']);
        Route::get('ingredientes/{id}/show', ['uses' => 'IngredientesController@show', 'as' => 'admin.ingredientes.show']);
        Route::get('ingredientes/{id}/edit', ['uses' => 'IngredientesController@edit', 'as' => 'admin.ingredientes.edit']);
        Route::post('ingredientes/{id}/update', ['uses' => 'IngredientesController@update', 'as' => 'admin.ingredientes.update']);

/*
GRUPO DE RUTAS PARA EL CONTROLADOR DE LOS METODOS DE PREPARACION, ESTAS RUTAS PERMITEN LA NAVEGACION Y LA REALIZACION DE TODOS LOS CRUDS PARA UN METODO DE PREPARACION.
*/
        Route::resource('metodos', 'MetodosController');
        Route::get('metodos/{id}/destroy', ['uses' => 'MetodosController@destroy', 'as' => 'admin.metodos.destroy']);
        Route::get('metodos/{id}/show', ['uses' => 'MetodosController@show', 'as' => 'admin.metodos.show']);
        Route::get('metodos/{id}/edit', ['uses' => 'MetodosController@edit', 'as' => 'admin.metodos.edit']);
        Route::post('metodos/{id}/update', ['uses' => 'MetodosController@update', 'as' => 'admin.metodos.update']);

/*
GRUPO DE RUTAS PARA EL CONTROLADOR DE LOS PRODUCTOS, ESTAS RUTAS PERMITEN LA NAVEGACION Y LA REALIZACION DE TODOS LOS CRUDS PARA UN PRODUCTO.
*/
        Route::resource('productos', 'ProductosController');
        Route::get('productos/{id}/destroy', ['uses' => 'ProductosController@destroy', 'as' => 'admin.productos.destroy']);
        Route::get('productos/{id}/show', ['uses' => 'ProductosController@show', 'as' => 'admin.productos.show']);
        Route::get('productos/{id}/edit', ['uses' => 'ProductosController@edit', 'as' => 'admin.productos.edit']);
        Route::post('productos/{id}/update', ['uses' => 'ProductosController@update', 'as' => 'admin.productos.update']);


/*
GRUPO DE RUTAS PARA EL CONTROLADOR DE LA TABLA DE PERDIDADS Y GANANCIAS.
*/
        Route::resource('tablas', 'TablasController');
        Route::get('tablas/{id}/show', ['uses' => 'TablasController@show', 'as' => 'admin.tablas.show']);


    });


    Route::auth();
