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

#Se puede agregar el uso de variables dentro de la ruta y reconocer que es lo que el usuario edito.
Route::get('Proveedor/delete/{id}', 'ProveedorController@DeletePro') ->name('DeleteProveedor');

Route::get('Proveedor/update/{id}', 'ProveedorController@UpdatePro') ->name('UpdateProveedor');

Route::get('Proveedor/view', 'ProveedorController@ViewPro') ->name('ViewProveedor');


Route::get('Proveedor/insert', function () {
    return view('Proveedor/insert');
})->name('InsertProveedor');

//Encargado de tomar la informaciòn y enviarla a l controlador:
Route::post('Proveedor/insert', 'ProveedorController@InsertPro')  ->name('InsertProveedor');

Route::post('Proveedor/update', 'ProveedorController@UpdateBdPro')  ->name('UpdateBdProveedor');

