<?php
$host = 'sql7.freesqldatabase.com';
$user = 'sql7741981';
$password = 'EHf1EbUJzV';
$database = 'sql7741981';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
