<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE DETALLES DEL PEDIDO</title>
</head>
<body>
    <H1 class="text-center">DETALLES DEL PEDIDO</H1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">NO. PEDIDO</th>
                    <th class="text-center">ID DEL PRODUCTO</th>
                    <th class="text-center">PRECIO DE COMPRA</th>
                    <th class="text-center">CANTIDAD</th>
                    <th class="text-center">SUBTOTAL</th>
                    <th class="text-center">FECHA</th>
                    <th class="text-center">HORA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $filas['NUM_PEDIDO'], $filas['CONSECUTIVO_P']?></td>
                    <td class="text-center"><?php echo $filas['ID_PRODUCTO']?></td>
                    <td class="text-center"><?php echo $filas['PRECIO_COMPRA']?></td>
                    <td class="text-center"><?php echo $filas['CANTIDAD_PEDIDOS']?></td>
                    <td class="text-center"><?php echo $filas['MONTO_SUBTOTAL_P']?></td>
                    <td class="text-center"><?php echo $filas['FECHA_P_U']?></td>
                    <td class="text-center"><?php echo $filas['HORA_P_U']?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="Home.php">
        <input type="submit" value="Atras" class="btn btn-secondary">
    </form>
</body>
</html>