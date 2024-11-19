//index.php
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inicio de Sesión</title>
</head>
<body>
<form action="validar.php" method="post">
<label>
<p>Nombre de Usuario</p>
<input type="text" name="usuario"
placeholder="Usuario" required>
</label>
<br>
<label>
<p>Contraseña</p>
<input type="password" name="password"
placeholder="Contraseña" required>
</label>
<br>
<input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>