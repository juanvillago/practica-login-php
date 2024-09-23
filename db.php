<?php

    // Definición de la clase Database
    class Database{
        // Declaración de variables privadas para los detalles de la conexión
        private $servername;
        private $user;
        private $password;
        private $dbname;
   
        // Constructor de la clase, inicializa las variables con valores predeterminados
        public function __construct(){
            $this->servername = "localhost"; // Nombre del servidor
            $this->user = "root";            // Nombre de usuario
            $this->password = "";            // Contraseña
            $this->dbname = "login";         // Nombre de la base de datos
        }

        // Método para establecer la conexión con la base de datos
        public function connect(){
            // Creación de una nueva instancia de mysqli con los detalles de conexión
            $conexion = new mysqli($this->servername, $this->user, $this->password, $this->dbname);
            return $conexion; // Retorna la conexión establecida
        }
    }
    /*
    <H1>CONECTADO TESTEO</H1>
    */

?>