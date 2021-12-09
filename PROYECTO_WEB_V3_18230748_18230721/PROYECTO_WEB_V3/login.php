<?php
session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$_SESSION['usuario'] = $usuario;
$mensaje="";
include("conexion.php");
$consulta="SELECT * FROM USUARIO WHERE ID_USUARIO='$usuario' AND PASSWORD='$contraseña';";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_fetch_assoc($resultado);
if(empty($usuario) || empty($contraseña)){
    ?>
    <div class="alert alert-danger">
    <?php
    echo "LLENE TODOS LOS CAMPOS"; ?>
    </div>
    <?php
    include("index.php");
}else{
    if($filas){
        if ($filas['CARGO'] == 'ADMINISTRADOR') {
            header("location:home.php");
        }else
        if ($filas['CARGO'] == 'EMPLEADO') {
            header("location:home2.php");
        }
    }
    else{
        ?>
        <div class="alert alert-danger">
        <?php
        echo "ERROR... USUARIO O CONTRASEÑA INCORRECTOS"; ?>
        </div>
        <?php
        include("index.php");
    }
}

?>