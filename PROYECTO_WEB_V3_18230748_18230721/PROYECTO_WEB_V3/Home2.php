<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_index.css" rel="stylesheet">
</head>
<body>
    <?php 
    include("conexion.php");
    session_start();
    ?>
    <h1>BIENVENIDO <b><?php echo $_SESSION['usuario']?></b></h1>
    <section class="text-center">
    <form action="Ventas.php">
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="VENTAS">
    </form><br>
    <form action="Det_Ventas.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="DETALLES DE VENTA">
    </form><br>
    <form action="Pedidos.php">
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="PEDIDOS">
    </form><br>
    <form action="Det_pedidos.php">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="DETALLES DE PEDIDO">
    </form>
    </section>
    <br><br>
    <section class="text-center">
    <a href="Cerrar_Sesion.php" class="btn btn-danger btn-sm" role="button">CERRAR SESION</a>
    </section>
</body>
</html>