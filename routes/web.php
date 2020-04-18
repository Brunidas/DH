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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// especialidades
Route::get('/especialidades', "SpecialtiesController@listado");

Route::post('/borrarEspecialidad', "SpecialtiesController@borrar");

Route::get('/agregarEspecialidad', function() {
    return view('agregarEspecialidad');
} );
Route::post('/agregarEspecialidad', "SpecialtiesController@agregar");

Route::get('/editarEspecialidad/{id}', "SpecialtiesController@editar");
Route::post('/editarEspecialidad', "SpecialtiesController@completarEdicion");

// -----------------------------------
// obras sociales
Route::get('/obrasSociales', "MedicalInsuranceController@listado");

Route::get('/agregarObraSocial', function() {
    return view('agregarObraSocial');
});
Route::post('/agregarObraSocial','MedicalInsuranceController@agregar');

Route::post('/borrarObraSocial', "MedicalInsuranceController@borrar");

Route::get('/editarObraSocial/{id}', "MedicalInsuranceController@editar");
Route::post('/editarObraSocial', "MedicalInsuranceController@completarEdicion");