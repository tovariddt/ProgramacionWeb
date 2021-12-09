<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDITAR USUARIO</title>
</head>
<body>
<h1>EDITE LOS DATOS DEL USUARIO</h1><br>
<div>
    <form action="" method="POST">
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
                <option value="ADMINISTRADOR" selected>ADMINISTRADOR</option>
                <option value="EMPLEADO">EMPLEADO</option>
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
        <input type="submit" value="ACTUALIZAR">
        <a href="">ATRAS</a>
    </form>
</div>
</body>
</html>