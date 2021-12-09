<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDITAR PRODUCTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">EDITE LOS DATOS DEL PRODUCTO</h1><br>
<div class="text-center">
    <form action="Editar_Producto.php" method="POST">
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
        <select name="SelUnidad">
                <option value="LITROS">LITROS</option>
                <option value="MILILITROS">MILILITROS</option>
                <option value="PIEZAS" selected>PIEZAS</option>
        </select><br>
        <input type="submit" value="ACTUALIZAR" class="btn btn-primary">
        <a href="Productos.php" class="btn btn-secondary">ATRAS</a>
    </form>
</div>
</body>
</html>
