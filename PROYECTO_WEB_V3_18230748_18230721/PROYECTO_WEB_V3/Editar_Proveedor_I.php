<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDITAR PROVEEDOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">EDITE LOS DATOS DEL PROVEEDOR</h1><br>
<?php
include("conexion.php");
$ID=$_GET['id'];
$consulta="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR='".$ID."';";
$resultado=mysqli_query($conexion, $consulta);
while ($filas = mysqli_fetch_assoc($resultado)){
?>
<div class="text-center">
    <form action="Editar_Proveedor.php?id=<?php echo $filas['ID_PROVEEDOR']?>" method="POST">
        <label>PROVEEDOR: </label>
        <input type="text" name="TxtPro" value="<?php echo $filas['EMPRESA_PROVEEDOR']?>"><br>
        <label>TELEFONO: </label>
        <input type="number" name="TxtTelPro" value="<?php echo $filas['TELEFONO_PROVEEDOR']?>"><br>
        <input type="submit" value="ACTUALIZAR" class="btn btn-primary">
        <a href="Proveedores.php" class="btn btn-secondary">ATRAS</a>
    </form>
    <?php }?>
</div>
</body>
</html>