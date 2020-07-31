<?php
 include "conexion.php";
 $nombre =$_POST['Nombre'];





 $resultado=$conexion->query("SELECT EXISTS (SELECT * FROM usuario WHERE nombreU='$nombre');");
 $row=mysqli_fetch_row($resultado);
 
     if ($row[0]=="1") {      
      
        
        header('Location: index.php?nombre=".$_POST["Nombre"]."');
     }else{
        
        header('Location: login.php');
     }   




?>