@extends('layout')
@yield('content')
	<div class='col-xs-7 col-md-offset-3'>
		<br>
		<br>
	    <h3>Formulario Ingreso Productos</h3>
		<form role="form" action='crearProducto' method="POST">
		      {!!CSRF_field()!!}
		  <div class="form-group">
		    <label for="modelo">Modelo</label>
		    <input type="text" class="form-control" id="modelo"
		           placeholder="modelo producto" name="modelo">
		  </div>
		  <div class="form-group">
		    <label for="precio">Precio</label>
		    <input type="text" class="form-control" id="precio" 
		           placeholder="50000" name="precio">
		  </div>
		  <div class="form-group">
		    <label for="rutaImagen">Ruta Imagen</label>
		    <input type="text" class="form-control" id="rutaImagen" 
		           placeholder="ruta" name="rutaImagen">
		  </div>
		  <div class="form-group">
		    <label for="descripcion">Descripcion</label>
		    <input type="text" class="form-control" id="descripcion" 
		           placeholder="Esto es un ejemplo de descripcion" name="descripcion">
		  </div>
		  <div class="form-group">
		    <label for="descripcion">Categoria</label>
		    <input type="text" class="form-control" id="categoria" 
		           placeholder="Esto es un ejemplo de categoria" name="categoria">
		  </div>
		  <button type="submit" class="btn btn-default">Enviar</button>
		</form>
    </div>		