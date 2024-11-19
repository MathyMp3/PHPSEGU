//conexion.php
<?php
$servidor = 'localhost:3307';
$usuario = 'root';
$contraseña = '1';
$base_datos = 'registros';
$conexion = new mysqli($servidor, $usuario, $contraseña,
$base_datos);
if ($conexion->connect_error) {
die('Error de conexión: ' . $conexion->connect_error);
}
?>