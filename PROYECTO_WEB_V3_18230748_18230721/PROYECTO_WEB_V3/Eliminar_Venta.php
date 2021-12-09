<?php
include("conexion.php");
$C=$_GET["c"];
$consulta="DELETE FROM DETALLES_VENTAS WHERE CONSECUTIVO_V='".$C."';";
mysqli_query($conexion, $consulta);
$Consulta2="DELETE FROM VENTAS WHERE CONSECUTIVO_V='".$C."';";
mysqli_query($conexion, $Consulta2);
header("location:Ventas.php");
?>