<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE DETALLES DE VENTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
    <H1 class="text-center">DETALLES DE VENTA</H1>
    <?php
        include("conexion.php");
        $consulta="SELECT * FROM DETALLES_VENTAS;";
        $resultado=mysqli_query($conexion, $consulta);
    ?>
    <div>
        <table class="table table-light" class="text-center">
            <thead>
                <tr>
                    <th class="text-center">NO. DE VENTA</th>
                    <th class="text-center">ID DEL PRODUCTO</th>
                    <th class="text-center">CANTIDAD</th>
                    <th class="text-center">SUBTOTAL</th>
                    <th class="text-center">FECHA</th>
                    <th class="text-center">HORA</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)){

                ?>
                <tr>
                    <td class="text-center"><?php echo $filas['NUM_VENTA'], $filas['CONSECUTIVO_V']?></td>
                    <td class="text-center"><?php echo $filas['ID_PRODUCTO']?></td>
                    <td class="text-center"><?php echo $filas['CANTIDAD_VENTAS']?></td>
                    <td class="text-center"><?php echo ($filas['MONTO_SUBTOTAL_V'])?></td>
                    <td class="text-center"><?php echo $filas['FECHA_V_U']?></td>
                    <td class="text-center"><?php echo $filas['HORA_V_U']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <form action="Home.php">
        <input type="submit" value="Atras" class="btn btn-secondary">
    </form>
</body>
</html>