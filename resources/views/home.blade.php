 @extends('layouts.master')
 @section('content')
       <div class="jumbotron">
         <h2 class="display-3">Hola {{ Auth::user()->name }}!</h2>
         <p class="lead">Bienvenido al sistema de basico de Ventas, el sistema cuenta con los 
         siguentes procesos que se deben tomar en cuenta para realizar las Operaciones.<br> 
          <h2 class="btn-warning">Pasos a Seguir</h2>
          <li>1 Registrar Clientes:</li>
          <li>2 Registrar Proveedores</li>
          <li>3 Registrar Categorias</li>
          <li>4 Registrar Productos</li>
          <li>5 Realizar ventas</li>
          <li>6 Realizar Reportes</li>
          <li>7 Registrar Usuarios</li>

         </p>
         <hr class="m-y-md">
         <p class="text-center"><small>Derechos Reservados Piura 2017</small></p>
         
         <div class="form-froup"></div>
       </div>
 @stop