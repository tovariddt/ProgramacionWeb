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
<div>
    <form action="" method="POST" class="text-center">
        <label>RFC: </label>
        <input type="text" name="TxtRFC" value=""><br>
        <label>NOMBRE(S): </label>
        <input type="text" name="TxtName" value=""><br>
        <label>APELLIDO PATERNO: </label>
        <input type="text" name="TxtApP" value=""><br>
        <label>APELLIDO MATERNO: </label>
        <input type="text" name="TxtApM" value=""><br>
        <label>TELEFONO: </label>
        <input type="number" name="TxtTel" value=""><br>
        <label>EMAIL: </label>
        <input type="text" name="TxtEmail" value=""><br>
        <label>CARGO: </label>
        <select name="Cargo">
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="EMPLEADO" selected>EMPLEADO</option>
        </select>
        <br><label>CALLE: </label>
        <input type="text" name="TxtCalle" value=""><br>
        <label>NO. CALLE: </label>
        <input type="text" name="TxtNoCalle" value=""><br>
        <label>COLONIA: </label>
        <input type="text" name="TxtCol" value=""><br>
        <label>CIUDAD: </label>
        <select name="ComCiudad">
                        <option value="ACAYUCAN">ACAYUCAN</option>
                        <option value="COSOLEACAQUE">COSOLEACAQUE</option>
                        <option value="COATZACOALCOS">COATZACOALCOS</option>
                        <option value="MINATITLAN" selected>MINATITLAN</option>
                </select><br>
        <input type="submit" value="ACTUALIZAR" class="btn btn-primary">
        <a href="Usuarios.php" class="btn btn-secondary">ATRAS</a>
    </form>
</div>
</body>
</html>