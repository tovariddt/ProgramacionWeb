<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE VENTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">VENTAS</h1>
    <?php
        include("conexion.php");
        $consulta="SELECT * FROM VENTAS;";
        $resultado=mysqli_query($conexion, $consulta);
    ?>
    <a href="Nueva_Venta_I.php" class="btn btn-success">NUEVA VENTA</a>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">NO. VENTA</th>
                    <th class="text-center">USUARIO</th>
                    <th class="text-center">MONTO TOTAL</th>
                    <th class="text-center">FECHA</th>
                    <th class="text-center">HORA</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)){

                ?>
                <tr>
                    <td class="text-center"><?php echo $filas['NUM_VENTA'], $filas['CONSECUTIVO_V']?></td>
                    <td class="text-center"><?php echo $filas['ID_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['MONTO_TOTAL_VENTA']?></td>
                    <td class="text-center"><?php echo $filas['FECHA_VENTA']?></td>
                    <td class="text-center"><?php echo $filas['HORA_VENTA']?></td>
                    <td class="text-center">
                        <a href="Eliminar_Venta.php?c=<?php echo $filas['CONSECUTIVO_V']?>" class="btn btn-danger">ELIMINAR</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <form action="Home.php">
        <input type="submit" value="ATRAS" class="btn btn-secondary">
    </form>
</body>
</html>