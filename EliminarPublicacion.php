<?php

include "conexion.php";

	EliminarT($_GET['ID']);

	function EliminarT($ID)
	{
			$servidor = "localhost:3307";
	$usuario = "root";
			$conexion = mysqli_connect( $servidor, $usuario, "","sistema" );
		$sentencia="DELETE FROM publicacion WHERE ID = $ID ";
	
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Tipo Eliminado exitosamente");
	window.location.href='index.php';
</script>