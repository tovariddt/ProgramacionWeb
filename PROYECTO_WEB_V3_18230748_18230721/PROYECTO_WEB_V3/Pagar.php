<?php
include("carrito.php");
include("conexion.php");

if ($_POST) {
    $total=0;
    foreach($_SESSION['carrito'] as $indice=>$producto){
        $total=$total+($producto['precio']*$producto['cant']);
    }
}
?>
<?php
$Usuario=$_POST['txtUsua'];
$consulta="INSERT INTO VENTAS(CONSECUTIVO_V, ID_USUARIO, MONTO_TOTAL_VENTA) VALUES(NULL, '".$Usuario."','".$total."');";
mysqli_query($conexion, $consulta);
$IdVenta=$conexion->insert_id;
foreach($_SESSION['carrito'] as $indice=>$producto){
    $ip=$producto['txtCod'];
    $c=$producto['cant'];
    $p=$producto['precio']*$producto['cant'];
    $consul=("INSERT INTO DETALLES_VENTAS(CONSECUTIVO_V, ID_PRODUCTO, CANTIDAD_VENTAS, MONTO_SUBTOTAL_V) VALUES('".$IdVenta."', '".$ip."', '".$c."', '".$p."');");
    mysqli_query($conexion, $consul);
}
header("location:Ventas.php");
foreach($_SESSION['carrito'] as $indice=>$producto){
    unset($_SESSION['carrito'][$indice]);
}
?>