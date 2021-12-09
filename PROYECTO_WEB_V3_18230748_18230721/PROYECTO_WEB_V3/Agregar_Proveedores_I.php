<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AGREGAR PROVEEDOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">INGRESE LOS DATOS DEL PROVEEDOR</h1><br>
<div  class="text-center">
    <form action="Agregar_Proveedores.php" method="POST">
        <label>NOMBRE DEL PROVEEDOR: </label>
        <input type="text" name="TxtPro" style="text-transform:uppercase;"><br>
        <label>TELEFONO: </label>
        <input type="text" name="TxtTelPro" placeholder="10 digitos: 9221234567" maxlength="10"><br>
        <input type="submit" value="AGREGAR" class="btn btn-success">
        <a href="Proveedores.php" class="btn btn-secondary">ATRAS</a>
    </form>
</div>
</body>
</html>