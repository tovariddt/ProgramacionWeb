<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
    <H1 class="text-center">PRODUCTOS</H1>
    <?php
        include("conexion.php");
        $consulta="SELECT * FROM PRODUCTO;";
        $resultado=mysqli_query($conexion, $consulta);
    ?>
    <a href="Agregar_Producto_I.php" class="btn btn-success">AGREGAR PRODUCTO</a>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">DESCRIPCION</th>
                    <th class="text-center">PRECIO DE VENTA</th>
                    <th class="text-center">STOCK MINIMO</th>
                    <th class="text-center">EXISTENCIA</th>
                    <th class="text-center">UNIDAD DE MEDIDA</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)){

                ?>
                <tr>
                    <td class="text-center"><?php echo $filas['ID_PRODUCTO']?></td>
                    <td class="text-center"><?php echo $filas['NOMBRE_PRODUCTO']?></td>
                    <td class="text-center"><?php echo $filas['PRECIO_VENTA']?></td>
                    <td class="text-center"><?php echo $filas['STOCK_MINIMO']?></td>
                    <td class="text-center"><?php echo $filas['EXISTENCIA']?></td>
                    <td class="text-center"><?php echo $filas['UNIDAD_MEDIDA']?></td>
                    <td class="text-center">
                        <a href="Editar_Producto_I.php?id=<?php echo $filas['ID_PRODUCTO']?>" class="btn btn-primary">EDITAR</a>
                        <a href="Eliminar_Producto.php?id=<?php echo $filas['ID_PRODUCTO']?>" class="btn btn-danger">ELIMINAR</a>
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