<?php
include("conexion.php");
$ID=$_GET['id'];
$consulta="DELETE FROM PROVEEDOR WHERE ID_PROVEEDOR='".$ID."';";
$resultado=mysqli_query($conexion, $consulta);
header("location:Proveedores.php");
?>