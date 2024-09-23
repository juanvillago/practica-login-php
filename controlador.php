<?php

// Verifica si el formulario ha sido enviado
if(isset($_POST["submit"])){

    // Obtiene los valores de usuario y contraseña del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Verifica si los campos de usuario o contraseña están vacíos
    if(empty($usuario) || empty($password)){
        ?>
        <!-- Muestra un mensaje de error si los campos están vacíos -->
        <h1 class="bad">Introduce los datos</h1>
        <?php

    } else {
        // Crea una nueva instancia de la clase User
        $user = new User;

        // Verifica si el usuario y la contraseña son correctos
        if($user->getUser($usuario, $password)){

            // Inicia una nueva sesión y guarda el nombre de usuario en la sesión
            session_start();
            $_SESSION["usuario"] = $usuario;

            // Redirige al usuario a la página home.php
            header("Location: home.php");

        } else {
            ?>
            <!-- Muestra un mensaje de error si la autenticación falla -->
            <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
            <?php
        }
    }
}
?>

