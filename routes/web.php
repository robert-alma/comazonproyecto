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

Route::group(['namespace' => 'Publico'], function () {

    Route::get('/', 'LoginController@inicio')->name('inicio');
    #Vista Login
    Route::get('/login', 'LoginController@index')->name('login');

    #Validar credenciales
    Route::post('/login', 'LoginController@login')->name('validar');

    #Bienvenido a tu dashboard
    Route::get('/bienvenido','LoginController@bienvenido')->name('bienvenido');

    #Cerrar Sesion
    Route::post('/logout', 'LoginController@logout')->name('logout');

    #Vista Recuperar Contraseña
    Route::get('/clave', 'RecuperarClaveController@index')->name('vistacontraseña');

    #EnviarCorreo Nuevacontraseña
    Route::post('/recuperar', 'RecuperarClaveController@enviarCorreo')->name('recuperar');

    #VistadeRestaurarcontraseña
    Route::get('/recuperar/{id}', 'RecuperarClaveController@vistaNuevaContrasena')->name('vistarestaurar');

    #RestaurarContraseña
    Route::post('/restaurar', 'RecuperarClaveController@nuevaContrasena')->name('restaurar');

    #Vista Registro
    Route::get('/registro', 'RegistroController@index')->name('vistaregistro');

    #Registrar Usuario
    Route::post('/registro', 'RegistroController@registrarUsuario')->name('registro');

});

Route::group(['namespace' => 'Cliente','middleware'=>'cliente'], function () {

    #Vista Dashboard
    Route::get('/cliente/dashboard', 'DashboardController@index')->name('cliente.index');

    #Vista Solicitud
    Route::get('/cliente/solicitar', 'SolicitudController@index')->name('cliente.solicitud');

    #Registrar Solicitud
    Route::post('/cliente/solicitar', 'SolicitudController@registrarSolicitud')->name('cliente.registrarsolicitud');

    #Aceptar Cotizacion
    Route::get('/cliente/solicitar/{id}/aceptar', 'SolicitudController@aceptarSolicitud')->name('cliente.aceptarsolicitud');

    #Rechazar Cotizacion
    Route::get('/cliente/solicitar/{id}/rechazar', 'SolicitudController@rechazarSolicitud')->name('cliente.rechazarsolicitud');
});

Route::group(['namespace' => 'Ejecutivo','middleware'=>'ejecutivo'], function () {

    #Vista Dashboard
    Route::get('/ejecutivo/dashboard', 'DashboardController@index')->name('ejecutivo.index');

    #Vista Cotización
    Route::get('/ejecutivo/cotizar/{id}', 'CotizacionController@index')->name('ejecutivo.cotizacion');

    #Registrar Cotización
    Route::post('/ejecutivo/cotizar/{id}', 'CotizacionController@registrarCotizacion')->name('ejecutivo.registrarcotizacion');

    #Ver Cliente Info
    Route::get('/ejecutivo/cliente/solicitud/{id}', 'ClienteInfoController@index')->name('ejecutivo.vercliente');

});
