<?php

// Definición de la clase Database para manejar la conexión a la base de datos
class Database
{
    // Propiedades privadas con los datos de conexión
    private $hostname = "localhost";  // Nombre del servidor de base de datos
    private $port = "3306";           // Puerto de MySQL (por defecto 3306)
    private $database = "cita";       // Nombre de la base de datos
    private $username = "root";       // Nombre de usuario de la base de datos
    private $password = "1212";       // Contraseña de la base de datos
    private $charset = "utf8";        // Codificación de caracteres

    // Método para establecer la conexión con la base de datos
    function conectar()
    {
        try {
            // Construcción de la cadena de conexión a la base de datos
            $conexion = "mysql:host=" . $this->hostname . ";port=" . $this->port . ";dbname=" . $this->database . ";charset=" . $this->charset;

            // Opciones para la conexión PDO
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Habilita el manejo de errores con excepciones
                PDO::ATTR_EMULATE_PREPARES => false // Deshabilita la emulación de consultas preparadas para mayor seguridad
            ];

            // Creación de la conexión PDO
            $pdo = new PDO($conexion, $this->username, $this->password, $option);

            // Retorna la instancia de PDO si la conexión es exitosa
            return $pdo;
        } catch (PDOException $e) {
            // Captura y muestra el mensaje de error en caso de fallo en la conexión
            echo 'Error de la conexión: ' . $e->getMessage();
            exit; // Termina la ejecución del script
        }
    }
}
