<?php
include("conexion.php");
$RFC=$_GET['rfc'];
$consulta="DELETE FROM USUARIO WHERE ID_USUARIO='".$RFC."';";
$resultado=mysqli_query($conexion, $consulta);
header("location:Usuarios.php");
?>