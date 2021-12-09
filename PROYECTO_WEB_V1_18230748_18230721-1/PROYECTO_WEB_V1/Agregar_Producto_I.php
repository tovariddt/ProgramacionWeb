<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AGREGAR PRODUCTO</title>
    </head>
<body>
<h1>INGRESE LOS DATOS DEL PRODUCTO</h1><br>
<div>
    <form action="" method="POST">
        <label>CODIGO: </label>
        <input type="text" name="TxtCod" placeholder="CODIGO DE BARRAS"><br>
        <label>DESCRIPCION: </label>
        <input type="text" style="text-transform:uppercase;" name="TxtDes"><br>
        <label>PRECIO DE VENTA: </label>
        <input type="text" name="TxtPrV"><br>
        <label>STOCK MINIMO: </label>
        <input type="text" name="TxtStM" maxlength="2"><br>
        <label>EXISTENCIA: </label>
        <input type="text" name="TxtExis"><br>
        <label>UNIDAD DE MEDIDA: </label>
        <select name="SelUnidad">
            <option value="LITROS">LITROS</option>
            <option value="MILILITROS">MILILITROS</option>
            <option value="PIEZAS" selected>PIEZAS</option>
        </select><br>
        <input type="submit" value="AGREGAR">
        <a href="Productos.php">ATRAS</a>
    </form>
</div>
</body>
</html>