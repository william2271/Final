<?php
  include 'conexion.php';

  $consulta=ConsultarRegion($_GET['ID']);
 
  function ConsultarRegion($ID)
  {

    $servidor = "localhost:3307";
$usuario = "root";
		$conexion = mysqli_connect( $servidor, $usuario, "","sistema" );
    $sentencia="SELECT * FROM publicacion WHERE ID=$ID  ";
    $resultado=mysqli_query($conexion,$sentencia);
    $filas=mysqli_fetch_assoc($resultado);
    return [
    


       $filas['ID'],
       $filas['titulo'],
       $filas['contenido']






    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar publicacion</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:grey;">


<div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Publicacion</h1> </span>
  		<br>
	  <form action="ModificarPublicacionAccion.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  	<input type="hidden" name="ID" value="<?php echo $_GET['ID']?> ">
  
		  <label>Titulo: </label>
          <input type="text" id="Titulo" name="Titulo" value="<?php echo $consulta[1] ?>"><br>
          <label>Contenido: </label>
		  <input type="text" id="Contenido" name="Contenido" value="<?php echo $consulta[2] ?>"><br>
  	
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>








</body>
</html>