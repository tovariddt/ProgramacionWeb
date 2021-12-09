<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDITAR PRODUCTO</title>
    </head>
<body>
<h1>EDITE LOS DATOS DEL PRODUCTO</h1><br>
<div>
    <form action="" method="POST">
        <label>CODIGO: </label>
        <input type="text" name="TxtCod" value=""><br>
        <label>DESCRIPCION: </label>
        <input type="text" name="TxtDes" value=""><br>
        <label>PRECIO VENTA</label>
        <input type="text" name="TxtPrV" value=""><br>
        <label>STOCK MINIMO</label>
        <input type="text" name="TxtStM" value=""><br>
        <label>EXISTENCIA</label>
        <input type="text" name="TxtExis" value=""><br>
        <label>UNIDAD DE MEDIDA</label>
                <option value="LITROS">LITROS</option>
                <option value="MILILITROS">MILILITROS</option>
                <option value="PIEZAS" selected>PIEZAS</option>
        </select><br>
        <input type="submit" value="ACTUALIZAR">
        <a href="Productos.php">ATRAS</a>
    </form>
</div>
</body>
</html>
