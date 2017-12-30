<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('Productos', 'AhmadFatoni\ApiGenerator\Controllers\API\ProductosController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('Productos/{id}/delete', ['as' => 'Productos.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\ProductosController@destroy']);
Route::resource('Flota', 'AhmadFatoni\ApiGenerator\Controllers\API\FlotaController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('Flota/{id}/delete', ['as' => 'Flota.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\FlotaController@destroy']);
Route::resource('Cupones', 'AhmadFatoni\ApiGenerator\Controllers\API\CuponesController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('Cupones/{id}/delete', ['as' => 'Cupones.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\CuponesController@destroy']);
Route::resource('api/beta/branches', 'AhmadFatoni\ApiGenerator\Controllers\API\SucursalesController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/beta/branches/{id}/delete', ['as' => 'api/beta/branches.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\SucursalesController@destroy']);