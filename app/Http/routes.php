<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middelware'=> ['web']],function (){
  //rutas con recursos
  Route::resource('usuario','Usuarios\UsuariosController');
  Route::resource('cliente','Ventas\ClienteController');
  Route::resource('proveedor','Ventas\ProveedorController');
  Route::resource('producto','Ventas\ProductoController');
  Route::resource('ventas','Ventas\VentasController');
  Route::resource('categoria','Ventas\CategoriaController');
  
  Route::auth();
  Route::get('/home', 'HomeController@index');

});


