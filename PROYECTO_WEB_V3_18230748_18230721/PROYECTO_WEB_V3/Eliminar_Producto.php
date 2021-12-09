<?php
include("conexion.php");
$ID=$_GET["id"];
$Consulta="DELETE FROM PRODUCTO WHERE ID_PRODUCTO='".$ID."';";
mysqli_query($conexion, $Consulta);
header("location:Productos.php");
?>