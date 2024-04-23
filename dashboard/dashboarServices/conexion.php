<?php
$servername = "localhost"; // 
$username = "root"; //
$password = ""; // 
$database = "projetvitrine"; //

try {
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Comprobar la conexión
    if ($conn->connect_error) {
        throw new Exception("La conexión falló: " . $conn->connect_error);
    }

   
} catch (Exception $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
