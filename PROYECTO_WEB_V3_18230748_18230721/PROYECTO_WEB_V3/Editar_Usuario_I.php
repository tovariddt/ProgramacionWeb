<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDITAR USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">EDITE LOS DATOS DEL USUARIO</h1><br>
<?php
include("conexion.php");
$RFC=$_GET['rfc'];
$consulta="SELECT * FROM USUARIO WHERE ID_USUARIO='".$RFC."';";
$resultado=mysqli_query($conexion, $consulta);
while ($filas = mysqli_fetch_assoc($resultado)){
?>
<div>
    <form action="Editar_Usuario.php" method="POST" class="text-center">
        <label>RFC: </label>
        <input type="text" name="TxtRFC" value="<?php echo $filas['ID_USUARIO']?>"><br>
        <label>NOMBRE(S): </label>
        <input type="text" name="TxtName" value="<?php echo $filas['NOMBRE_USUARIO']?>"><br>
        <label>APELLIDO PATERNO: </label>
        <input type="text" name="TxtApP" value="<?php echo $filas['APELLIDO_P_USUARIO']?>"><br>
        <label>APELLIDO MATERNO: </label>
        <input type="text" name="TxtApM" value="<?php echo $filas['APELLIDO_M_USUARIO']?>"><br>
        <label>TELEFONO: </label>
        <input type="number" name="TxtTel" value="<?php echo $filas['TEL_USUARIO']?>"><br>
        <label>EMAIL: </label>
        <input type="text" name="TxtEmail" value="<?php echo $filas['EMAIL']?>"><br>
        <label>CARGO: </label>
        <select name="Cargo">
            <?php if ($filas['CARGO'] == 'ADMINISTRADOR') { ?>
                <option value="ADMINISTRADOR" selected>ADMINISTRADOR</option>
                <option value="EMPLEADO">EMPLEADO</option>
            <?php }else{
                ?>
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="EMPLEADO" selected>EMPLEADO</option>
            <?php }?>
        </select>
        <br><label>CALLE: </label>
        <input type="text" name="TxtCalle" value="<?php echo $filas['CALLE_USUARIO']?>"><br>
        <label>NO. CALLE: </label>
        <input type="text" name="TxtNoCalle" value="<?php echo $filas['NUM_CALLE_USUARIO']?>"><br>
        <label>COLONIA: </label>
        <input type="text" name="TxtCol" value="<?php echo $filas['COLONIA_USUARIO']?>"><br>
        <label>CIUDAD: </label>
        <select name="ComCiudad">
                    <?php if ($filas['CIUDAD_USUARIO'] == 'ACAYUCAN') { ?>
                        <option value="ACAYUCAN" selected>ACAYUCAN</option>
                        <option value="COSOLEACAQUE">COSOLEACAQUE</option>
                        <option value="COATZACOALCOS">COATZACOALCOS</option>
                        <option value="MINATITLAN">MINATITLAN</option>
                    <?php } if ($filas['CIUDAD_USUARIO'] == 'COSOLEACAQUE') { ?>
                        <option value="ACAYUCAN">ACAYUCAN</option>
                        <option value="COSOLEACAQUE" selected>COSOLEACAQUE</option>
                        <option value="COATZACOALCOS">COATZACOALCOS</option>
                        <option value="MINATITLAN">MINATITLAN</option>
                    <?php }?>
                    <?php if ($filas['CIUDAD_USUARIO'] == 'COATZACOALCOS') { ?>
                        <option value="ACAYUCAN">ACAYUCAN</option>
                        <option value="COSOLEACAQUE">COSOLEACAQUE</option>
                        <option value="COATZACOALCOS" selected>COATZACOALCOS</option>
                        <option value="MINATITLAN">MINATITLAN</option>
                    <?php }?>
                    <?php if ($filas['CIUDAD_USUARIO'] == 'MINATITLAN') { ?>
                        <option value="ACAYUCAN">ACAYUCAN</option>
                        <option value="COSOLEACAQUE">COSOLEACAQUE</option>
                        <option value="COATZACOALCOS">COATZACOALCOS</option>
                        <option value="MINATITLAN" selected>MINATITLAN</option>
                    <?php }?>
                </select><br>
        <input type="submit" value="ACTUALIZAR" class="btn btn-primary">
        <a href="Usuarios.php" class="btn btn-secondary">ATRAS</a>
    </form>
    <?php }?>
</div>
</body>
</html>