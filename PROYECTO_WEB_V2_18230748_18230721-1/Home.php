<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_inputs.css" rel="stylesheet">
</head>
<body>
    <style>
        body{
        background-image: url(FONDO_IMG.png);
        background-repeat: no-repeat;
        background-size: 1366px 788px;
    }

    section{
        margin-top: 5px;
        background-color: #eee;
        margin-left: 145px;
        width: 80%;
        height: auto;
        padding-bottom: 5px;
    }

    .btn-block{
            width: 20%;
        }

    </style>
<section id="content" class="text-center">
    <div class="alert alert-success">
    <H3>BIENVENIDO  <b></b></H3>
    </div>
    <form action="Usuarios.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="USUARIOS">
    </form><br>
    <form action="Proveedores.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="PROVEEDORES">
    </form><br>
    <form action="Productos.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="PRODUCTOS">
    </form><br>
    <form action="Ventas.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="VENTAS">
    </form><br>
    <form action="Det_Ventas.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="DETALLES DE VENTA">
    </form><br>
    <form action="Pedidos.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="PEDIDOS">
    </form><br>
    <form action="Det_pedidos.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="DETALLES DE PEDIDO">
    </form>
    <br>
    <div class="text-center">
    <a href="" class="btn btn-danger btn-sm" role="button">CERRAR SESION</a>
    </div>
</section>
</body>
</html>