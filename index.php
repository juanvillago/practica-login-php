<?php

// Inicia una nueva sesión o reanuda la existente
session_start();

// Verifica si la sesión "usuario" está establecida
if(isset($_SESSION["usuario"])){
    // Si la sesión está establecida, redirige al usuario a "home.php"
    header("Location: home.php");
    exit(); // Es una buena práctica añadir exit después de header para detener la ejecución del script
}

// Incluye los archivos necesarios para la base de datos, el modelo y el controlador
include "db.php";
include "modelo.php";
include "controlador.php";

?>
<?php include "header.php"?> <!-- Incluye el archivo de header html -->

<div class="container">
    <div class="row mt-3 justify-content-md-center">
        <div class="col-md-6">
            <!-- Formulario de inicio de sesión -->
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Nombre:</label>
                    <!-- Campo de entrada para el nombre de usuario -->
                    <input class="form-control" name="usuario" placeholder="Nombre" value="" type="text">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <!-- Campo de entrada para la contraseña -->
                    <input class="form-control" name="password" value="" type="password">
                </div>
                <!-- Botón para enviar el formulario -->
                <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesion</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>