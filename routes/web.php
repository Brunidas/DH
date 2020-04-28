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
    return view('index');
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



// contacto
Route::get('/contact', function() {
    return view('contact');
} );


// turno
Route::get('/turno', function() {
    return view('turno');
} );

// perfil
Route::get('/profile', function() {
    return view('profile');
} );

// indice
Route::get('/index', function() {
    return view('index');
} );

// faq
Route::get('/faq', function() {
    return view('faq');
} );


// login
Route::get('/login', function() {
    return view('login');
} );

// form
Route::get('/form', function() {
    return view('form');
} );

// form1
Route::get('/form-1', function() {
    return view('form-1');
} );

// form2
Route::get('/form-2', function() {
    return view('form-2');
} );

// home
Route::get('/home', function() {
    return view('home');
} );
