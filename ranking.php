<?php
include 'config.php';

$result = $conn->query("SELECT * FROM personas");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking de Usuarios</title>
</head>
<body>
    <h1>Ranking de Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['fecha_nacimiento']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay registros disponibles.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php">Volver al formulario</a>
</body>
</html>

<?php
$conn->close();
?>
