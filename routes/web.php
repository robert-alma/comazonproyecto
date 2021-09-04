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

Route::group(['namespace' => 'Login'], function () {

    Route::get('/', 'LoginController@inicio')->name('inicio');
    #Vista Login
    Route::get('/login', 'LoginController@index')->name('login');

    #Validar credenciales
    Route::post('/login', 'LoginController@login')->name('validar');

    #Vista Recuperar Contraseña
    Route::get('/clave', 'LoginController@clave')->name('vistacontraseña');

    #EnviarCorreo Nuevacontraseña
    Route::post('/recuperar', 'LoginController@correoparanuevacontraseña')->name('recuperar');

    #VistadeRestaurarcontraseña
    Route::get('/recuperar/{id}', 'LoginController@vistarestaurarcontraseña')->name('vistarestaurar');

    #RestaurarContraseña
    Route::post('/restaurar', 'LoginController@restaurarcontraseña')->name('restaurar');

    #Cerrar Sesion
    Route::post('/logout', 'LoginController@logout')->name('logout');

    #Bienvenido a tu dashboard
    Route::get('/bienvenido','LoginController@bienvenido')->name('bienvenido');

    #Vista Registro
    Route::get('/registro', 'RegistroController@index')->name('vistaregistro');

    #Registrar Usuario
    Route::post('/registro', 'RegistroController@RegistrarUsuario')->name('registro');

});

Route::group(['namespace' => 'Cliente','middleware'=>'cliente'], function () {

    #Vista Dashboard
    Route::get('/cliente/dashboard', 'ClienteController@index')->name('cliente.index');
    #Vista Solicitud
    Route::get('/cliente/solicitar', 'ClienteController@solicitud')->name('cliente.solicitud');
    #Registrar Solicitud
    Route::post('/cliente/solicitar', 'ClienteController@registrarsolicitud')->name('cliente.registrarsolicitud');
    #Aceptar Cotizacion
    Route::get('/cliente/solicitar/{id}/aceptar', 'ClienteController@aceptarsolicitud')->name('cliente.aceptarsolicitud');
    #Rechazar Cotizacion
    Route::get('/cliente/solicitar/{id}/rechazar', 'ClienteController@rechazarsolicitud')->name('cliente.rechazarsolicitud');
});

Route::group(['namespace' => 'Ejecutivo','middleware'=>'ejecutivo'], function () {

    #Vista Dashboard
    Route::get('/ejecutivo/dashboard', 'EjecutivoController@index')->name('ejecutivo.index');
    #Vista Cotización
    Route::get('/ejecutivo/cotizar/{id}', 'EjecutivoController@cotizacion')->name('ejecutivo.cotizacion');
    #Registrar Cotización
    Route::post('/ejecutivo/cotizar/{id}', 'EjecutivoController@registrarcotizacion')->name('ejecutivo.registrarcotizacion');
    #Ver Cliente Info
    Route::get('/ejecutivo/cliente/solicitud/{id}', 'EjecutivoController@vistaclienteinfo')->name('ejecutivo.vercliente');

});
