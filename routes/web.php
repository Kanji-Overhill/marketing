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
//Route Autologin
Route::get('/appredirect/{key}','App\Http\Controllers\RegistrosController@autologin');

//Routes Registro
Route::get('/home-user','App\Http\Controllers\RegistrosController@index')->middleware('auth');
Route::get('/','App\Http\Controllers\foldersController@index')->middleware('auth');
Route::get('/lineas/{linea}','App\Http\Controllers\RegistrosController@linea')->middleware('auth');
Route::get('/search/{search}','App\Http\Controllers\RegistrosController@search');
Route::post('/registro','App\Http\Controllers\RegistrosController@registro')->name('registro')->middleware('auth');
Route::get('/carpeta/{id}','App\Http\Controllers\RegistrosController@archivo')->middleware('auth');
Route::post('/delete','App\Http\Controllers\RegistrosController@delete')->name('delete')->middleware('auth');

//Routes Archivos
Route::get('/registro/{url}','App\Http\Controllers\ArchivosController@index')->middleware('auth');
Route::get('/archivos/{url}','App\Http\Controllers\ArchivosController@archivos')->middleware('auth');
Route::post('/archivo','App\Http\Controllers\ArchivosController@archivo')->middleware('auth');
Route::post('/delete_file','App\Http\Controllers\ArchivosController@delete')->name('delete_file')->middleware('auth');
Route::post('/archivo-update','App\Http\Controllers\ArchivosController@saveName')->name('saveName')->middleware('auth');

//Routes Folders
Route::post('/checkFolder','App\Http\Controllers\foldersController@checkFolder')->name('checkFolder')->middleware('auth');
Route::post('/insertFolder','App\Http\Controllers\foldersController@insertFolder')->name('insertFolder')->middleware('auth');
Route::post('/folder-update','App\Http\Controllers\foldersController@saveName')->name('saveNameFolder')->middleware('auth');


//Routes New
Route::get('/categoria/{categoria}','App\Http\Controllers\ArchivosController@categoria')->middleware('auth');;
Route::post('/insert','App\Http\Controllers\ArchivosController@insertRegistro')->name('insert')->middleware('auth');

//Routes Identidad
Route::post('/identidad_presentacion/send_identidad','App\Http\Controllers\IdentidadController@sendIdentidadPresentacion')->name('sendIdentidadPresentacion')->middleware('auth');
Route::post('/identidad_firma/send_identidad','App\Http\Controllers\IdentidadController@sendIdentidadFirma')->name('sendIdentidadFirma')->middleware('auth');
Route::post('/identidad_digital/send_identidad','App\Http\Controllers\IdentidadController@sendIdentidadTarjeta')->name('sendIdentidadTarjeta')->middleware('auth');
Route::get('/tarjeta_digital/{id}','App\Http\Controllers\IdentidadController@tarjetaDigital')->name('tarjetaDigital');
Route::post('/imprimir/sendMail','App\Http\Controllers\IdentidadController@sendMail')->name('sendMail')->middleware('auth');
//Routes Templates
Route::get('/linea/hipotecario', function () {
    return view('l_hipotecario');
})->middleware('auth');
Route::get('/linea/empresarial', function () {
    return view('l_empresarial');
})->middleware('auth');
Route::get('/linea/seguros', function () {
    return view('l_seguros');
})->middleware('auth');

Route::get('/difusion/hipotecario', function () {
    return view('c_hipotecario');
})->middleware('auth');
Route::get('/difusion/empresarial', function () {
    return view('c_empresarial');
})->middleware('auth');
Route::get('/difusion/seguros', function () {
    return view('c_seguros');
})->middleware('auth');

Route::get('/identidad', function () {
    return view('identidad');
})->middleware('auth');

Route::get('/identidad_presentacion', function () {
    return view('identidad_presentacion');
})->middleware('auth')->name("idenditadPresentacion");

Route::get('/identidad_digital', function () {
    return view('identidad_digital');
})->middleware('auth');

Route::get('/imprimir', function () {
    return view('imprimir');
})->middleware('auth');

Route::get('/identidad_firma', function () {
    return view('identidad_firma');
})->middleware('auth');

Route::get('/herramientas', function () {
    return view('herramientas');
})->middleware('auth');

Route::get('/eventos', function () {
    return view('eventos');
})->middleware('auth');

Route::get('/fotos', function () {
    return view('fotos');
})->middleware('auth');

Route::get('/videos', function () {
    return view('videos');
})->middleware('auth');

Route::get('/aula', function () {
    return view('aula');
})->middleware('auth');

Route::get('/proximos_eventos', function () {
    return view('proximos_eventos');
})->middleware('auth');

Route::get('/gaceta', function () {
    return view('gaceta');
})->middleware('auth');

Route::get('/papeleria', function () {
    return view('papeleria');
})->middleware('auth');

Route::get('/l_hipotecario_redes_sociales', function () {
    return view('l_hipotecario_redes_sociales');
})->middleware('auth');

Route::get('/l_hipotecario_kit_bienvenida', function () {
    return view('l_hipotecario_kit_bienvenida');
})->middleware('auth');

Route::get('/l_empresarial_redes_sociales', function () {
    return view('l_empresarial_redes_sociales');
})->middleware('auth');

Route::get('/l_seguros_redes_sociales', function () {
    return view('l_seguros_redes_sociales');
});

Route::get('/l_seguros_redes_sociales', function () {
    return view('l_seguros_redes_sociales');
})->middleware('auth');

Route::get('/l_eventos_fotos_workshop', function () {
    return view('l_eventos_fotos_workshop');
})->middleware('auth');

Route::get('/l_empresarial_kit_bienvenida', function () {
    return view('l_empresarial_kit_bienvenida');
})->middleware('auth');

Route::get('/l_seguros_kit_bienvenida', function () {
    return view('l_seguros_kit_bienvenida');
})->middleware('auth');

Route::get('/identidad_soc', function () {
    return view('identidad_soc');
})->middleware('auth');

Route::get('/logo', function () {
    return view('logo');
})->middleware('auth');

Route::get('/l_hipotecario_materiales_publicitarios_comunicacion', function () {
    return view('l_hipotecario_materiales_publicitarios_comunicacion');
})->middleware('auth');

Route::get('/l_empresarial_materiales_publicitarios_comunicacion', function () {
    return view('l_empresarial_materiales_publicitarios_comunicacion');
})->middleware('auth');

Route::get('/l_seguros_materiales_publicitarios_comunicacion', function () {
    return view('l_seguros_materiales_publicitarios_comunicacion');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


