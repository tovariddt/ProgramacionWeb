<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="jquery.js"></script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>  
    <title>NUEVA VENTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_new.css" rel="stylesheet">
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body> 
    <style>
        label{
            margin-left: 10px;
        }
    </style>
    <h1 class="text-center">DATOS DE VENTA</h1>
<form action="" method="POST">
    <label>CODIGO: </label>
    <input autocomplete="off" name="codigo" id="codigo" required type="text" placeholder="Escribe el código">
</form>
<form action="" method="POST">
        <input type="hidden" name="txtCod" id="txtCod" value=""><br>
        <label>DESCRIPCION</label>
        <input type="text" name="txtDes" id="txtDes" value=""><br>
        <label>CANTIDAD</label>
        <input autocomplete="off" id="cant" name="cant" value="0" required type="number"><br>
        <label>PRECIO VENTA</label>
        <input type="text" name="precio" id="precio" value=""><br>
        <input type="submit" name="btnAgregar" id="btnAgregar" value="AÑADIR" class="btn btn-primary">
    </form>
<a href="Ventas.php" class="btn btn-secondary">ATRAS</a>
<div>
    <table class="table table-light">
        <thead>
            <tr>
                <th width="15%" class="text-center">CODIGO</th>
                <th width="20%" class="text-center">DESCRIPCION</th>
                <th width="15%" class="text-center">CANTIDAD</th>
                <th width="20%" class="text-center">PRECIO VENTA</th>
                <th width="20%" class="text-center">SUBTOTAL</th>
                <th width="10%" class="text-center">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="15%" class="text-center"></td>
                <td width="20%" class="text-center"></td>
                <td width="15%" class="text-center"></td>
                <td width="20%" class="text-center">$</td>
                <td width="20%" class="text-center">#</td>
                <td width="10%" class="text-center">
                    <form action="" method="POST">
                        <input type="hidden" name="txtCod" value="">
                        <button class="btn btn-danger" type="submit" name="btnAgregar" value="ELIMINAR">ELIMINAR</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan='3' align="right"><h3>Total</h3></td>
                <td width="20%"><h3>$</h3></td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="txtUsua" id="txtUsua" value="">
                        <button class="btn btn-success" type="submit" name="btnVenta" value="COMPLETAR VENTA">COMPLETAR VENTA</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
