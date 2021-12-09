<?php
include("conexion.php");
$Proveedor=$_POST['TxtPro'];
$Telefono=$_POST['TxtTelPro'];
if ($Proveedor == null || $Telefono == null) {
    ?>
    <div class="alert alert-danger">
        <?php
        echo "INGRESE LOS DATOS CORRECTAMENTE"; ?>
        </div>
        <?php
        include("Agregar_Proveedores_I.php");
}else{
    if ($Proveedor != null || $Telefono != null) {
        $consulta="INSERT INTO PROVEEDOR(EMPRESA_PROVEEDOR, TELEFONO_PROVEEDOR) VALUES('".strtoupper($Proveedor)."','".$Telefono."')";
    mysqli_query($conexion, $consulta);
    header("location:Proveedores.php");
    }
}

?>