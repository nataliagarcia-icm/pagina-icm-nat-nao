<?php
$conexion = new mysqli("localhost", "root", "", "bd_formulario");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos
$Nombre = $_POST['Nombre'];
$Correo_electronico = $_POST['Correo_electronico'];
$Telefono = $_POST['Telefono'];
$Comentarios = $_POST['Comentarios'];

// Insertar
$sql = "INSERT INTO registros(Nombre, Correo_electronico, Telefono, Comentarios)
        VALUES ('$Nombre', '$Correo_electronico', '$Telefono', '$Comentarios')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos enviados correctamente :)<br><br>";
    echo '<a href="index.html">Regresar al inicio</a>';
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>