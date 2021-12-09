<?php
include("Validar_Stock.php");
session_start();
$mensaje="";
    if (isset($_POST['btnAgregarC'])) {
        switch ($_POST['btnAgregarC']) {
            case 'AÑADIR':
                $ID=$_POST['txtCod'];
                $Des=$_POST['txtDes'];
                $Precio=$_POST['precioC'];
                $Cant=$_POST['cant'];
                if (tieneExistencia($ID, $Cant)) {
                    header("location:Nuevo_Pedido_I.php");
                    if (!isset($_SESSION['carrito'])) {
                        $producto=array(
                            'txtCod'=>$ID,
                            'txtDes'=>$Des,
                            'cant'=>$Cant,
                            'precioC'=>$Precio
                        );
                        $_SESSION['carrito'][0]=$producto;
                    }else{
                        $numProductos=count($_SESSION['carrito']);
                        $producto=array(
                            'txtCod'=>$ID,
                            'txtDes'=>$Des,
                            'cant'=>$Cant,
                            'precioC'=>$Precio
                        );
                        $_SESSION['carrito'][$numProductos]=$producto;
                    }
                }else{
                    header("location:Nuevo_Pedido_I_Alert.php");
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