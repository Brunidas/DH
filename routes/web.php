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
Route::get('/especialidades', "SpecialtiesController@listado")->middleware('auth');

Route::post('/borrarEspecialidad', "SpecialtiesController@borrar")->middleware('auth');

Route::get('/agregarEspecialidad', function() {
    return view('agregarEspecialidad');
} )->middleware('auth');
Route::post('/agregarEspecialidad', "SpecialtiesController@agregar")->middleware('auth');

Route::get('/editarEspecialidad/{id}', "SpecialtiesController@editar")->middleware('auth');
Route::post('/editarEspecialidad', "SpecialtiesController@completarEdicion")->middleware('auth');


// -----------------------------------
// obras sociales
Route::get('/obrasSociales', "MedicalInsuranceController@listado")->middleware('auth');

Route::get('/agregarObraSocial', function() {
    return view('agregarObraSocial');
})->middleware('auth');
Route::post('/agregarObraSocial','MedicalInsuranceController@agregar')->middleware('auth');

Route::post('/borrarObraSocial', "MedicalInsuranceController@borrar")->middleware('auth');

Route::get('/editarObraSocial/{id}', "MedicalInsuranceController@editar")->middleware('auth');
Route::post('/editarObraSocial', "MedicalInsuranceController@completarEdicion")->middleware('auth');

// -----------------------------------
// usuarios
Route::get('/usuarios', "UsersController@listado")->middleware('auth');
Route::get('/agregarUsuario', function() {
    return view('agregarUsuario');
})->middleware('auth');
Route::post('/agregarUsuario','UsersController@agregar')->middleware('auth');
Route::post('/borrarUsuario','UsersController@borrar')->middleware('auth');
Route::get('/editarUsuario/{id}', "UsersController@editar")->middleware('auth');
Route::post('/editarUsuario', "UsersController@completarEdicion")->middleware('auth');

// admins
Route::get('/adminstradores', "AdminsController@listado")->middleware('auth');
Route::get('/agregarAdministrador', "AdminsController@listadoUsuarios")->middleware('auth');
Route::post('/hacerAdmin',"AdminsController@agregar")->middleware('auth');
Route::post('/eliminarAdmin',"AdminsController@eliminar")->middleware('auth');

// profesionales
Route::get('/profesionales', "ProfessionalsController@listado")->middleware('auth');
Route::get('/agregarProfesional', "ProfessionalsController@listadoUsuarios")->middleware('auth');
Route::get('/hacerProfesional/{id}', "ProfessionalsController@datosNecesarios" )->middleware('auth');
Route::post('/agregarProfesional', "ProfessionalsController@agregar")->middleware('auth');
Route::post('/eliminarProfesional', "ProfessionalsController@eliminar" )->middleware('auth');


// -----------------------------------
// pacientes / cuenta
Route::get('/cuenta', 'PatientsController@listado')->middleware('auth');

Route::get('/agregarPaciente/{id}', 'PatientsController@agregarPaciente')->middleware('auth');
Route::post('/agregarPaciente', 'PatientsController@completarAgregado')->middleware('auth');
Route::post('/borrarPaciente', 'PatientsController@borrar')->middleware('auth');

Route::get('/editarPaciente/{id}', "PatientsController@editar")->middleware('auth');
Route::post('/editarPaciente', "PatientsController@completarEdicion")->middleware('auth');

// -----------------------------------
// turnos
Route::get('/turnosProfesional/{id}', "MeetingsController@listadoProfesional" )->middleware('auth');
Route::get('/crearTurno/{id_usuario}/{id_profesional}', "MeetingsController@crearTurno" )->middleware('auth');
Route::post('/crearTurno', "MeetingsController@completarAgregado" )->middleware('auth');

Route::post('/eliminarTurno', "MeetingsController@eliminarTurno" )->middleware('auth');

Route::get('/turnosUsuario/{id}', "MeetingsController@listadoUsuario" )->middleware('auth');

Route::get('/pedirTurno/{id}', "MeetingsController@turnoUsuario" )->middleware('auth');
Route::post('/pedirTurno/{id}', "MeetingsController@turnoUsuarioCompletar" )->middleware('auth');
// -----------------------------------
// fechas
Route::get('/fechas',"DatesController@listado")->middleware('auth');
Route::post('/agregarDias',"DatesController@agregarDias")->middleware('auth');
