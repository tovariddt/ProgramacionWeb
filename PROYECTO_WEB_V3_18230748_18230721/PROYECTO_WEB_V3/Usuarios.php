<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE USUARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
<?php
    include("conexion.php");
    session_start();
    $consulta="SELECT * FROM USUARIO;";
    $resultado=mysqli_query($conexion, $consulta);
?>
    <H1 class="text-center">USUARIOS</H1>
    <a href="Agregar_Usuario_I.php" class="btn btn-success">AGREGAR USUARIO</a>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">NOMBRE</th>
                    <th class="text-center">APELLIDO PATERNO</th>
                    <th class="text-center">APELLIDO MATERNO</th>
                    <th class="text-center">TELEFONO</th>
                    <th class="text-center">CALLE</th>
                    <th class="text-center">NO. CALLE</th>
                    <th class="text-center">COLONIA</th>
                    <th class="text-center">CIUDAD</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">CARGO</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)){?>
                <tr>
                    <td class="text-center"><?php echo $filas['ID_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['NOMBRE_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['APELLIDO_P_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['APELLIDO_M_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['TEL_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['CALLE_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['NUM_CALLE_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['COLONIA_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['CIUDAD_USUARIO']?></td>
                    <td class="text-center"><?php echo $filas['EMAIL']?></td>
                    <td class="text-center"><?php echo $filas['CARGO']?></td>
                    <td class="text-center">
                        <a href="Editar_Usuario_I.php?rfc=<?php echo $filas['ID_USUARIO']?>" class="btn btn-primary">EDITAR</a>
                        <a href="Eliminar_Usuario.php?rfc=<?php echo $filas['ID_USUARIO']?>" class="btn btn-danger">ELIMINAR</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <form action="Home.php">
        <input type="submit" class="btn btn-secondary" value="ATRAS">
    </form>
</body>
</html>