<?php
include("conexion.php");
include("Editar_Proveedor_I.php");
$Pro=$_POST['TxtPro'];
$Tel=$_POST['TxtTelPro'];
if ($Pro != null || $Tel != null) {
    $consultaPro="UPDATE PROVEEDOR SET EMPRESA_PROVEEDOR='".strtoupper($Pro)."', TELEFONO_PROVEEDOR='".$Tel."' WHERE ID_PROVEEDOR='".$ID."';";
mysqli_query($conexion, $consultaPro);
header("location:Proveedores.php");
}
?>