<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar</title>
    <link rel="stylesheet" href="public/css/login.css"/>
</head>
<body>
<center>
    <div class="contenedor">
        <div class="panel mitad-mitad ">
            <div class="panel-encabezado">
                <h2>Ingresar</h2>
            </div>
            <div class="panel-cuerpo">
                <span id="errores"></span>
                <form action="acciones/begin_session.php" method="post" id="login">
                    <input type="text" name="usuario" id="usuario" class="input-formulario" placeholder="Usuario"/>
                    <input type="password" name="password" id="password" class="input-formulario" placeholder="Contraseña"/>
                    <input type="submit" value="Acceder" class="boton"/>
                </form>

            </div>
        </div>
    </div>
</center>
<script src="public/javascripts/valida.js"></script>

</body>
</html>