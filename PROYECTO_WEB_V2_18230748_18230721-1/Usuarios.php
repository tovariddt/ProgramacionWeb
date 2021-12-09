<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIPUVE USUARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="style_buttons.css" rel="stylesheet">
</head>
<body>
    <H1 class="text-center">USUARIOS</H1>
    <a href="Agregar_Usuario_I.php" class="btn btn-success">AGREGAR USUARIO</a>
    <div>
        <table class="table table-light">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">NOMBRE</th>
                    <th class="text-center">APELLIDO PATERNO</th>
                    <th class="text-center">APELLIDO MATERNO</th>
                    <th class="text-center">TELEFONO</th>
                    <th class="text-center">CALLE</th>
                    <th class="text-center">NO. CALLE</th>
                    <th class="text-center">COLONIA</th>
                    <th class="text-center">CIUDAD</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">CARGO</th>
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
        <input type="submit" class="btn btn-secondary" value="ATRAS">
    </form>
</body>
</html>