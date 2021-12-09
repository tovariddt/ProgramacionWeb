<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE PROVEEDORES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
    <H1 class="text-center">PROVEEDORES</H1>
    <?php
        include("conexion.php");
        $consulta="SELECT * FROM PROVEEDOR;";
        $resultado=mysqli_query($conexion, $consulta);
    ?>
    <a href="Agregar_Proveedores_I.php" class="btn btn-success">AGREGAR PROVEEDOR</a>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">PROVEEDOR</th>
                    <th class="text-center">TELEFONO</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)){?>
                <tr>
                    <td class="text-center"><?php echo $filas['ID_PROVEEDOR']?></td>
                    <td class="text-center"><?php echo $filas['EMPRESA_PROVEEDOR']?></td>
                    <td class="text-center"><?php echo $filas['TELEFONO_PROVEEDOR']?></td>
                    <td class="text-center">
                        <a href="Editar_Proveedor_I.php?id=<?php echo $filas['ID_PROVEEDOR']?>" class="btn btn-primary">EDITAR</a>
                        <a href="Eliminar_Proveedor.php?id=<?php echo $filas['ID_PROVEEDOR']?>" class="btn btn-danger">ELIMINAR</a>
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