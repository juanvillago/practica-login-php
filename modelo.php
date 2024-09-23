<?php

// Definición de la clase User que extiende de la clase Database
class User extends Database {

    // Método público para obtener un usuario basado en el nombre de usuario y la contraseña
    public function getUser($username, $password) {
        // Consulta SQL para seleccionar el usuario que coincida con el nombre de usuario y la contraseña proporcionados
        $consulta = "SELECT * FROM usuarios WHERE usuario='$username' AND contraseña='$password'";
        
        // Ejecuta la consulta y guarda el resultado
        $resultado = $this->connect()->query($consulta);
        
        // Obtiene el número de filas del resultado de la consulta
        $filas = $resultado->num_rows;
        
        // Si hay exactamente una fila, significa que se encontró un usuario que coincide
        if ($filas == 1) {
            return true; // Retorna verdadero si se encontró el usuario
        }
        
        // Retorna falso si no se encontró el usuario
        return false;
    }
}




