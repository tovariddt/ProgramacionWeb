<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUEVA VENTA</title>
    </head>
<body> 

    <h1>DATOS DE VENTA</h1>
<form action="" method="POST">
    <label>CODIGO: </label>
    <input autocomplete="off" name="codigo" required type="text" placeholder="Escribe el código">
</form>
<form action="" method="POST">
        <label>DESCRIPCION</label>
        <input type="text" name="txtDes" id="txtDes" value=""><br>
        <label>CANTIDAD</label>
        <input autocomplete="off" id="cant" name="cant" value="0" required type="number"><br>
        <label>PRECIO VENTA</label>
        <input type="text" name="precio" id="precio" value=""><br>
        <input type="submit" name="btnAgregar" id="btnAgregar" value="AÑADIR">
        <a href="Ventas.php">ATRAS</a>
    </form>       
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
                <td width="20%" class="text-center"></td>
                <td width="20%" class="text-center"></td>
                <td width="10%" class="text-center">
                    <form action="" method="POST">
                        <button class="btn btn-danger" type="submit" name="btnAgregar" value="ELIMINAR">ELIMINAR</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan='3' align="right"><h3>Total</h3></td>
                <td width="20%"><h3>$</h3></td>
                <td>
                    <form action="" method="POST">
                        <button class="btn btn-primary" type="submit" name="btnVenta" value="COMPLETAR VENTA">COMPLETAR VENTA</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
