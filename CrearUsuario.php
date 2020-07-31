<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuevo Usuario</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body background="fondo.jpg">
<div class="todo">
  
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Registrar usuario</h1> </span>
  		<br>
	  <form action="Crear.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		
  		<input type="hidden" id="ID" name="ID"><br>
		  
		  <label>Nombre: </label>
  		<input type="text" id="Nombre" name="Nombre"><br>
  		


		  <label>Apellido: </label>
  		<input type="text" id="Apellido" name="Apellido"><br>
  		
  		<label>Foto: </label>
  		<input type="file" id="Foto" name="Foto" ><br>
		  
		  <label>Correo: </label>
  		<input type="text" id="Correo" name="Correo"><br>
  		
  		<label>Nombre de Usuario: </label>
  		<input type="text" id="NombreU" name="NombreU" ><br>
          
          <label>Contraseña: </label>
  		<input type="text" id="Contraseña" name="Contraseña" ><br>
		  
	
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	

</div>


</body>
</html>