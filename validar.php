//validar.php
<?php
session_start();
if (isset($_POST['usuario']) && isset($_POST['password'])) {
include 'conexion.php';
$usuario = $conexion->real_escape_string($_POST['usuario']);
$contraseña = $conexion->real_escape_string($_POST['password']);
$query = "SELECT password FROM usuarios
WHERE nombre = '$usuario'";
$resultado = $conexion->query($query);
if ($resultado && $resultado->num_rows > 0) {
$fila = $resultado->fetch_assoc();
if (password_verify($password, $fila['password'])) {
$_SESSION['usuario'] = $usuario;
header('Location: principal.php');
} else {
echo "Contraseña incorrecta. <a href='./'>Volver</a>";
}
} else {
echo "Usuario no encontrado. <a href='./'>Volver</a>";
}
} else {header('Location: ./');
}
?>