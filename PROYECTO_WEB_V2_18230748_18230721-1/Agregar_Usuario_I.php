<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AGREGAR USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">INGRESE LOS DATOS DEL NUEVO USUARIO</h1>
<div  class="text-center">
    <form action="Agregar_usuario.php" method="POST">
        <label>RFC: </label>
        <input type="text" name="TxtRFC" style="text-transform:uppercase;" placeholder="13 digitos" maxlength="13"><br>
        <label>CONTRASEÑA: </label>
        <input type="password" name="TxtPass"><br>
        <label>NOMBRE(S): </label>
        <input type="text" name="TxtName" style="text-transform:uppercase;"><br>
        <label>APELLIDO PATERNO: </label>
        <input type="text" name="TxtApP" style="text-transform:uppercase;"><br>
        <label>APELLIDO MATERNO: </label>
        <input type="text" name="TxtApM" style="text-transform:uppercase;"><br>
        <label>TELEFONO: </label>
        <input type="text" name="TxtTel" placeholder="10 digitos: 9221234567" maxlength="10"><br>
        <label>EMAIL: </label>
        <input type="text" name="TxtEmail" style="text-transform:uppercase;" placeholder="EJEMPLO@HOTMAIL.COM"><br>
        <label>CARGO: </label>
        <select name="Cargo">
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="EMPLEADO" selected>EMPLEADO</option>
        </select><br>
        <fieldset>
            <legend>DIRECCION</legend>
                <label>CALLE: </label>
                <input type="text" name="TxtCalle" style="text-transform:uppercase;"><br>
                <label>NO. CALLE: </label>
                <input type="text" name="TxtNoCalle" style="text-transform:uppercase;"><br>
                <label>COLONIA: </label>
                <input type="text" name="TxtCol" style="text-transform:uppercase;"><br>
                <label>CIUDAD: </label>
                <select name="ComCiudad">
                    <option value="ACAYUCAN">ACAYUCAN</option>
                    <option value="COSOLEACAQUE">COSOLEACAQUE</option>
                    <option value="COATZACOALCOS">COATZACOALCOS</option>
                    <option value="MINATITLAN" selected>MINATITLAN</option>
                </select><br>
        </fieldset>
        <br>
        <input type="submit" value="AGREGAR" class="btn btn-success">
        <a href="Usuarios.php" class="btn btn-secondary">ATRAS</a>
    </form>
</div>
</body>
</html>