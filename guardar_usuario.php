<?php
if (isset($_POST['usuario']) && isset($_POST['password'])) {
include 'conexion.php';
$usuario = $conexion->real_escape_string($_POST['usuario']);
$contraseña = password_hash($_POST['password'],
PASSWORD_DEFAULT);
$query = "INSERT INTO usuarios (nombre, password)
VALUES ('$usuario', '$password')";
if ($conexion->query($query) === TRUE) {
header('Location: ./');
} else {
echo "Error al registrar usuario: " . $conexion->error;
}
}
?>