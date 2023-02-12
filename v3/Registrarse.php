<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Registrarse</title>
</head>

<body>
    <div class="contenedor">    
        <form action="" method="POST" class="formulario">
            <h2 class="titulo">Registrarse</h2>
            <hr>
            <?php
                include("conexion.php");
                include("controlador/controlador_registro.php");
            ?>
            <hr>
            <div class="padre">
                <div class="nombre_completo">
                    <label placeholder="Nombre completo" for="nombre_completo" >Nombre completo</label>
                    <input type="text" name="nombre_completo">
                </div>

                <div>
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario">
                </div>
                <div>
                    <label for="clave">Contraseña</label>
                    <input type="password" name="clave">
                </div>
                <div class="cuenta">
                    <input class="button" type="submit" value="Registrar" name="registro">
                    <a href="index.php">Salir</a>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>