<?php
include("conexion.php");
$Cod=$_POST["TxtCod"];
$Des=$_POST["TxtDes"];
$PrV=$_POST["TxtPrV"];
$StM=$_POST["TxtStM"];
$Exis=$_POST["TxtExis"];
$Uni=$_POST["SelUnidad"];
if ($Cod != null || $Des != null || $PrV != null || $StM != null || $Exis != null || $Uni != null) {
    $consulta="UPDATE PRODUCTO SET ID_PRODUCTO='".$Cod."',NOMBRE_PRODUCTO='".strtoupper($Des)."',PRECIO_VENTA='".$PrV."',STOCK_MINIMO='".$StM."',EXISTENCIA='".$Exis."',UNIDAD_MEDIDA='".$Uni."' WHERE ID_PRODUCTO='".$Cod."';";
    mysqli_query($conexion, $consulta);
    header("location:Productos.php");
}
?>