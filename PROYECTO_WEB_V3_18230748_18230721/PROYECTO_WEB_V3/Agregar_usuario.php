<?php
include("conexion.php");
$RFC=$_POST['TxtRFC'];
$Pass=$_POST['TxtPass'];
$Name=$_POST['TxtName'];
$ApP=$_POST['TxtApP'];
$ApM=$_POST['TxtApM'];
$Tel=$_POST['TxtTel'];
$Email=$_POST['TxtEmail'];
$Cargo=$_POST["Cargo"];
$Calle=$_POST['TxtCalle'];
$NoCalle=$_POST['TxtNoCalle'];
$Col=$_POST['TxtCol'];
$Ciudad=$_POST['ComCiudad'];
if($RFC == null || $Pass == null || $Name == null || $ApP == null || $ApM == null || $Tel == null || $Email == null || $Cargo == null || $Calle == null || $NoCalle == null || $Col == null || $Ciudad == null){
    ?>
    <div class="alert alert-danger">
        <?php
        echo "INGRESE LOS DATOS CORRECTAMENTE"; ?>
        </div>
        <?php
        include("Agregar_Usuario_I.php");
}else{
    if ($RFC != null || $Pass != null || $Name != null || $ApP != null || $ApM != null || $Tel != null || $Email != null || $Cargo != null || $Calle != null || $NoCalle != null || $Col != null || $Ciudad != null) {
        $consulta="INSERT INTO USUARIO VALUES('".strtoupper($RFC)."','".$Pass."','".strtoupper($Name)."','".strtoupper($ApP)."','".strtoupper($ApM)."','".$Tel."','".strtoupper($Calle)."','".$NoCalle."','".strtoupper($Col)."','".$Ciudad."','".strtoupper($Email)."','".$Cargo."')";
        mysqli_query($conexion, $consulta);
    header("location:Usuarios.php");
    }
}
?>