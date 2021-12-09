<?php
    include("conexion.php");
    include("carritoP.php");
    $Proveedor=$_POST["SelPro"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="jquery.js"></script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>  
    <title>NUEVO PEDIDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body> 
    <style>
        label{
            margin-left: 10px;
        }
    </style>
    <h1 class="text-center">DATOS DEL PEDIDO</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label>CODIGO: </label>
    <input autocomplete="off" name="codigo" id="codigo" required type="text" placeholder="Escribe el código">
</form>
<?php
if (isset($_POST['codigo'])) {
$Codigo=$_POST['codigo'];
$consulta="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO='".$Codigo."';";
$resultado=mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_assoc($resultado);
?>
<form action="" method="POST">
        <input type="hidden" name="txtCod" id="txtCod" value="<?php echo $filas['ID_PRODUCTO']?>"><br>
        <label>DESCRIPCION</label>
        <input type="text" name="txtDes" id="txtDes" value="<?php echo $filas['NOMBRE_PRODUCTO']?>"><br>
        <label>PRECIO COMPRA</label>
        <input type="text" name="precioC" id="precioC" value="0" required><br>
        <label>CANTIDAD</label>
        <input autocomplete="off" id="cant" name="cant" value="0" required type="number"><br>
        <input type="submit" name="btnAgregarC" id="btnAgregarC" value="AÑADIR" class="btn btn-primary">
    </form>
<?php 
}
?>
<a href="Pedidos.php" class="btn btn-secondary">ATRAS</a>
<?php 
if (!empty($_SESSION['carrito'])) { ?>
<div>
    <table class="table table-light">
        <thead>
            <tr>
                <th width="15%" class="text-center">CODIGO</th>
                <th width="20%" class="text-center">DESCRIPCION</th>
                <th width="15%" class="text-center">PRECIO COMPRA</th>
                <th width="20%" class="text-center">CANTIDAD</th>
                <th width="20%" class="text-center">SUBTOTAL</th>
                <th width="10%" class="text-center">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php $total=0;?>
            <?php foreach($_SESSION['carrito'] as $indice=>$producto){ ?>
            <tr>
                <td width="15%" class="text-center"><?php echo $producto['txtCod'];?></td>
                <td width="20%" class="text-center"><?php echo $producto['txtDes'];?></td>
                <td width="20%" class="text-center">$<?php echo $producto['precioC'];?></td>
                <td width="15%" class="text-center"><?php echo $producto['cant'];?></td>
                <td width="20%" class="text-center"><?php echo number_format($producto['precioC']*$producto['cant'],2);?></td>
                <td width="10%" class="text-center">
                    <form action="" method="POST">
                        <input type="hidden" name="txtCod" value="<?php echo $producto['txtCod']?>">
                        <button class="btn btn-danger" type="submit" name="btnAgregarC" value="ELIMINAR">ELIMINAR</button>
                    </form>
                </td>
            </tr>
            <?php $total=$total+($producto['precioC']*$producto['cant']);?>
            <?php }?>
            <tr>
                <td colspan='3' align="right"><h3>Total</h3></td>
                <td width="20%"><h3>$<?php echo number_format($total,2); ?></h3></td>
                <td>
                    <form action="Pagar_Pedido.php" method="POST">
                        <?php 
                            
                            $_SESSION["proveedor"]=$Proveedor;
                        ?>
                        <input type="hidden" name="txtUsua" id="txtUsua" value="<?php echo $_SESSION['usuario']; ?>">
                        <button class="btn btn-success" type="submit" name="btnPedido" value="COMPLETAR PEDIDO">COMPLETAR PEDIDO</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php } ?>
</body>
</html>
