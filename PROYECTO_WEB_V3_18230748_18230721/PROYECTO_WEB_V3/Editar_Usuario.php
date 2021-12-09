<?php
include("conexion.php");
$RFC=$_POST['TxtRFC'];
$Name=$_POST['TxtName'];
$ApP=$_POST['TxtApP'];
$ApM=$_POST['TxtApM'];
$Tel=$_POST['TxtTel'];
$Email=$_POST['TxtEmail'];
$Cargo=$_POST['Cargo'];
$Calle=$_POST['TxtCalle'];
$NoCalle=$_POST['TxtNoCalle'];
$Col=$_POST['TxtCol'];
$Ciudad=$_POST['ComCiudad'];
if ($RFC != null || $Name != null || $ApP != null || $ApM != null || $Tel != null || $Cargo != null || $Email != null || $Calle != null || $NoCalle != null || $Col != null || $Ciudad != null) {
    $consulta="UPDATE USUARIO SET ID_USUARIO='".strtoupper($RFC)."', NOMBRE_USUARIO='".strtoupper($Name)."', APELLIDO_P_USUARIO='".strtoupper($ApP)."', APELLIDO_M_USUARIO='".strtoupper($ApM)."', TEL_USUARIO='".$Tel."', CALLE_USUARIO='".strtoupper($Calle)."', NUM_CALLE_USUARIO='".$NoCalle."', COLONIA_USUARIO='".$Col."', CIUDAD_USUARIO='".$Ciudad."', EMAIL='".strtoupper($Email)."', CARGO='".$Cargo."' WHERE ID_USUARIO='".$RFC."'";
mysqli_query($conexion, $consulta);
header("location:Usuarios.php");
}
?>