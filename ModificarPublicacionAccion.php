<?php
	include 'conexion.php';

	ModificarRegion($_POST['ID'],$_POST['Titulo'],$_POST['Contenido']);

	function ModificarRegion($ID,$Titulo,$Contenido)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
				$conexion = mysqli_connect( $servidor, $usuario, "","sistema" );

		$sentencia="UPDATE publicacion SET ID='".$ID."',titulo='".$Titulo."',contenido='".$Contenido."' WHERE ID='".$ID."' ";
		mysqli_query($conexion,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Region Modificado exitosamente");
	window.location.href='index.php';
</script>	
