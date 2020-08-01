<?php
	include 'conexion.php';

	NuevoPokemon($_POST['ID'],$_POST['Nombre'], $_POST['Titulo'], $_POST['Contenido']);

	function NuevoPokemon($ID, $Nombre,$Titulo,$Contenido)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
                $conexion = mysqli_connect( $servidor, $usuario, "","sistema" );
                $date = date('Y-m-d');
         
		 $sentencia="INSERT INTO publicacion (ID, titulo,contenido,fecha,nombre) VALUES ('".$ID."', '".$Titulo."', '".$Contenido."','".$date."','".$Nombre."')";
		mysqli_query($conexion,$sentencia);
		
     






	}
?>

<script type="text/javascript">
	alert("Publicacion Ingresado exitosamente");
	window.location.href='index.php';
</script>