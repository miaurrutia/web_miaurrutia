<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre       = $_POST['nombre'] ?? '';
    $email        = $_POST['email'] ?? '';
    $telefono     = $_POST['telefono'] ?? '';
    $nacionalidad = $_POST['nacionalidad'] ?? '';
    $asunto       = $_POST['asunto'] ?? '';
    $mensaje      = $_POST['mensaje'] ?? '';

    $conexion = @new mysqli('localhost', 'root', '', 'portfolio_contacto');

    if (!$conexion->connect_error) {
        $stmt = $conexion->prepare("INSERT INTO mensajes (nombre, email, telefono, nacionalidad, asunto, mensaje) VALUES (?,?,?,?,?,?)");

        $stmt->bind_param("ssssss", $nombre, $email, $telefono, $nacionalidad, $asunto, $mensaje);

        $stmt->execute();
        $stmt->close();
        $conexion->close();
    }
}
?>
<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>Mensaje enviado</title>
</head>
<body>
  <h2>¡Gracias por tu mensaje!</h2>
  <p>Tu información se registró correctamente.</p>
  <a href=\"index.html\">Volver al contacto</a>
</body>
</html>
