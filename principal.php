//principal.php
<?php session_start();
if (!empty($_SESSION['usuario'])) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Página Principal</title>
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> !</h1>
<button onclick="cerrar()">Cerrar Sesión</button>
<script>
function cerrar() {
window.location = "cerrar.php";
}
</script>
</body>
</html>
<?php } else {
header('Location: ./');
}
?>