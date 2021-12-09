<?php
include("carritoP.php");
include("conexion.php");
if ($_POST) {
    $total=0;
    foreach($_SESSION['carrito'] as $indice=>$producto){
        $total=$total+($producto['precioC']*$producto['cant']);
    }
}
?>
<?php
$Pro=$_SESSION['proveedor'];
$query="SELECT ID_PROVEEDOR FROM PROVEEDOR WHERE EMPRESA_PROVEEDOR='".$Pro."';";
$res=mysqli_query($conexion, $query);
$idPro=mysqli_fetch_assoc($res);
$Usuario=$_POST['txtUsua'];
$consulta="INSERT INTO PEDIDOS(CONSECUTIVO_P, ID_PROVEEDOR, ID_USUARIO, MONTO_TOTAL_PEDIDOS) VALUES(NULL, '".$idPro."', '".$Usuario."','".$total."');";
mysqli_query($conexion, $consulta);
$IdPed=$conexion->insert_id;
foreach($_SESSION['carrito'] as $indice=>$producto){
    $ip=$producto['txtCod'];
    $pc=$producto['precioC'];
    $c=$producto['cant'];
    $s=$producto['precioC']*$producto['cant'];
    $consul=("INSERT INTO DETALLES_PEDIDOS(CONSECUTIVO_P, ID_PRODUCTO, PRECIO_COMPRA, CANTIDAD_PEDIDOS, MONTO_SUBTOTAL_P) VALUES('".$IdPed."', '".$ip."', '".$pc."', '".$c."', '".$s."');");
    mysqli_query($conexion, $consul);
}
header("location:Pedidos.php");
foreach($_SESSION['carrito'] as $indice=>$producto){
    unset($_SESSION['carrito'][$indice]);
}
?>