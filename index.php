<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery-3.5.1.min.js"></script> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>publicacion</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<span> <h1 align ="Center">Publicaciones:</h1> </span>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body background="fondo.jpg">
<div class="todo">
  
  <div id="contenido">

  	<table class="table table-dark" style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>ID.</th>
  			<th>Titulo</th>
  			<th>Contenido</th>
        <th>Fecha</th>
        <th> <a href="CrearPublicacion.php"> <button type="button" class="btn btn-info">Nueva Publicacion</button> </a> </th>
        
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM usuario as A
      INNER JOIN publicacion as B
          ON (A.nombreU = B.nombre)";
      $resultado=mysqli_query($conexion,$sentencia);
      
      while($filas=mysqli_fetch_array($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['ID']; echo "</td>";
         
          echo "<td>"; echo $filas['titulo']; echo "</td>";
          echo "<td>"; echo $filas['contenido']; echo "</td>";
          echo "<td>"; echo $filas['fecha']; echo "</td>";
          
          echo "<td>  <a href='modP1.php?ID=".$filas['ID']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminarP.php?ID=".$filas['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>                                          
  </div>
  


</div>




</body>
</html>