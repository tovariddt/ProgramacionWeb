<?php
include("Validar_Stock.php");
session_start();
$mensaje="";
    if (isset($_POST['btnAgregar'])) {
        switch ($_POST['btnAgregar']) {
            case 'AÑADIR':
                $ID=$_POST['txtCod'];
                $Des=$_POST['txtDes'];
                $Cant=$_POST['cant'];
                $Precio=$_POST['precio'];
                if (tieneExistencia($ID, $Cant)) {
                    header("location:Nueva_Venta_I.php");
                    if (!isset($_SESSION['carrito'])) {
                        $producto=array(
                            'txtCod'=>$ID,
                            'txtDes'=>$Des,
                            'cant'=>$Cant,
                            'precio'=>$Precio
                        );
                        $_SESSION['carrito'][0]=$producto;
                    }else{
                        $numProductos=count($_SESSION['carrito']);
                        $producto=array(
                            'txtCod'=>$ID,
                            'txtDes'=>$Des,
                            'cant'=>$Cant,
                            'precio'=>$Precio
                        );
                        $_SESSION['carrito'][$numProductos]=$producto;
                    }
                }else{
                    header("location:Nueva_Venta_I_Alert.php");
                }
                break;
            case 'ELIMINAR':
                $ID=$_POST['txtCod'];
                foreach($_SESSION['carrito'] as $indice=>$producto){
                    if ($producto['txtCod']==$ID) {
                        unset($_SESSION['carrito'][$indice]);
                    }
                }
                break;
        }

    }
?>