<?php
  include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body  style="background-color:grey;">
<?php echo '<a href="CrearUsuario.php">Crear Usuario Nuevo</a>';?>
<form action="index.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		

		  
		  <label>Nombre De Usuario: </label>
  		<input type="text" id="Nombre" name="Nombre"><br>
		  <label>Contraseña: </label>
  		<input type="text" id="Contraseña" name="Contraseña"><br>
  		

</select>                 
  	
  		
  		<br>
  		<button type="submit" class="btn btn-success">Iniciar Sesion</button>
     </form>
</body>
</html>                        