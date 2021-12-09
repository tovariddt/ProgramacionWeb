<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
    <H1 class="text-center">PRODUCTOS</H1>
    <a href="Agregar_Producto_I.php" class="btn btn-success">AGREGAR PRODUCTO</a>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">DESCRIPCION</th>
                    <th class="text-center">PRECIO DE VENTA</th>
                    <th class="text-center">STOCK MINIMO</th>
                    <th class="text-center">EXISTENCIA</th>
                    <th class="text-center">UNIDAD DE MEDIDA</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center">
                        <a href="" class="btn btn-primary">EDITAR</a>
                        <a href="" class="btn btn-danger">ELIMINAR</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="Home.php">
        <input type="submit" value="ATRAS" class="btn btn-secondary">
    </form>
</body>
</html>