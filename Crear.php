<?php
	include 'conexion.php';

	NuevoPokemon($_POST['ID'], $_POST['Foto'], $_POST['Nombre'], $_POST['Correo'], $_POST['NombreU'], $_POST['Contraseña'] , $_POST['Apellido']);

	function NuevoPokemon($ID, $Foto, $Nombre,$Correo,$NombreU,$Contraseña,$Apellido)
	{
		$servidor = "localhost:3307";
		$usuario = "root";
                $conexion = mysqli_connect( $servidor, $usuario, "","sistema" );

                $resultado=$conexion->query("SELECT EXISTS (SELECT * FROM usuario WHERE nombreU='$NombreU');");
 $row=mysqli_fetch_row($resultado);
 
     if ($row[0]=="1") {          
               
        header('Location: CrearUsuario.php');
     }else{
         
		 $sentencia="INSERT INTO usuario (ID, nombre, apellido,foto,correo,nombreU,contraseña) VALUES ('".$ID."', '".$Nombre."', '".$Apellido."','".$Foto."','".$Correo."','".$NombreU."','".$Contraseña."')";
		mysqli_query($conexion,$sentencia);
		mail($Correo, "vida", "Acceda a este link para habilitar su cuenta y iniciar sesion: http://localhost:8080/Final/login.php");
        header('Location: login.php');
     }   






	}
?>

<script type="text/javascript">
	alert("Usuario Ingresado exitosamente");
	window.location.href='index.php';
</script>