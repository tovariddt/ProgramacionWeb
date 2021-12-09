<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_inputs.css" rel="stylesheet">
    <link href="style_index.css" rel="stylesheet">
</head>
<body>
<section id="content" class="text-center">
    <form action="login.php" method="POST">
        <h1><b>INICIO DE SESION</b></h1>
        <input type="text" style="text-transform:uppercase;" placeholder="Ingrese su RFC" name="usuario"><br>
        <input type="password" placeholder="INGRESE SU CONTRASEÑA" name="contraseña"><br>
        <button type="submit" class="btn btn-success btn-sm" value="ACCEDER">ACCEDER</button>
        <br><br>
    </form>
</section>
</body>
</html>