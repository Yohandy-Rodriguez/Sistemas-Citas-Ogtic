<?php
// Iniciar la sesión
session_start();

// Incluir el archivo de conexión a la base de datos
require_once '../php/cadena_de_conexion.php';
$db = new database();
$conn = $db->conectar();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $correo = trim($_POST['correo']);
    $asunto = trim($_POST['asunto']);
    $cedula = trim($_POST['cedula']);
    $dia = trim($_POST['dia']);
    $hora = trim($_POST['hora']);
    $lugar = trim($_POST['lugar']);
    $institucion = isset($_SESSION['institucion']) ? $_SESSION['institucion'] : '';

    // Validar los datos del formulario
    if (empty($nombre) || empty($apellido) || empty($correo) || empty($asunto) || empty($cedula) || empty($dia) || empty($hora) || empty($lugar) || empty($institucion)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Preparar una declaración SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO solicitudes (nombre, apellido, correo, asunto, cedula, dia, hora, lugar, institucion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Ejecutar la declaración
    $stmt->execute([$nombre, $apellido, $correo, $asunto, $cedula, $dia, $hora, $lugar, $institucion]);

    // Verificar si la inserción fue exitosa
    if ($stmt->rowCount() > 0) {
        echo "Datos guardados exitosamente.";
        header("location: ../html/formulario.php");
    } else {
        echo "Error al guardar los datos: ";
        header("location: ../html/formulario.php");
    }
}
?>