<?php
// Inicia una nueva sesión o reanuda la existente
session_start();

// Verifica si se ha enviado el formulario para cerrar sesión
if(isset($_POST["cerrarsesion"])){
    // Elimina la variable de sesión "usuario"
    unset($_SESSION["usuario"]);
    // Redirige al usuario a la página de inicio de sesión (index.php)
    header("Location: index.php");
}
?>

<?php 
// Verifica si la variable de sesión "usuario" está definida
if(isset($_SESSION["usuario"])) { 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<h1>BIENVENIDOS</h1>
<!-- Formulario para cerrar sesión -->
<form action="" method="POST">
    <button type="submit" class="btn btn-primary btn-block" name="cerrarsesion">Cerrar Sesión</button>
</form>

<?php 
// Si la variable de sesión "usuario" no está definida, redirige a la página de inicio de sesión (index.php)
} else { 
    header('Location: index.php');
} 
?>

</body>
</html>