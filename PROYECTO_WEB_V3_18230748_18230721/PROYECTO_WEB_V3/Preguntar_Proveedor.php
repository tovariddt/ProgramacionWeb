<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SIPUVE PEDIDOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="style_index.css" rel="stylesheet">
  <link href="style_new.css" rel="stylesheet">
</head>
<body>
  <?php
  include("conexion.php");
  session_start();
  ?>
<section class="text-center">
  <h1>SELECCIONE EL PROVEEDOR</h1>
  <form action="Nuevo_Pedido_I.php" method="POST">
    <label>PROVEEDOR: </label>
    <select name="SelPro" id="SelPro">
      <?php
      $Pro_Consul = "SELECT EMPRESA_PROVEEDOR FROM PROVEEDOR";
      $Res = mysqli_query($conexion, $Pro_Consul);
      while ($fila = mysqli_fetch_assoc($Res)) { ?>
        <option value="<?php echo $fila['EMPRESA_PROVEEDOR']; ?>"><?php echo $fila['EMPRESA_PROVEEDOR']; ?></option>
      <?php } ?>
    </select>
    <br>
    <input type="submit" class="btn btn-primary" value="ACEPTAR">
    <a href="Pedidos.php" class="btn btn-secondary">ATRAS</a>
  </form>
  </section>
</body>
</html>