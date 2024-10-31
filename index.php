<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $stmt = $conn->prepare("INSERT INTO personas (nombre, fecha_nacimiento) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $fecha_nacimiento);

    if ($stmt->execute()) {
        header("Location: ranking.php");
        exit();
    } else {
        echo "Error al guardar el registro: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="">
        <label for="nombre">Nombre (opcional):</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="fecha_nacimiento">Fecha de nacimiento (obligatoria):</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
