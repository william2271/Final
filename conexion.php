<?php
$servidor = "localhost:3307";
$usuario = "root";
$conexion = mysqli_connect( $servidor, $usuario, "","sistema" );

  mysqli_select_db($conexion,"sistema");
  

  

?>