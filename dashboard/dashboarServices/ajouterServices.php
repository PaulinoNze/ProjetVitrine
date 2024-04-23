<?php
include 'conexion.php';

// Variables del formulario
$nom = $_REQUEST['nom'];
$description = $_REQUEST['description'];

// Variables del archivo de imagen
$image = $_FILES['image']['name'];
$imageTmp = $_FILES['image']['tmp_name'];

// Obtener la fecha actual
$date = date('Y-m-d');

// Ruta donde se guardará la imagen
$rutaBannerBD = "imgService/" . $image;

// Mover la imagen al directorio de imágenes
if (move_uploaded_file($imageTmp, $rutaBannerBD)) {
    // Consulta SQL para insertar datos en la tabla
    $query = "INSERT INTO service (nom, description, image, date)
              VALUES ('" . $nom . "', '" . $description . "', '" . $rutaBannerBD . "', '" . $date . "')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        header("Location: DashboardService.php?cr=cr"); // Redirigir si la inserción fue exitosa
        exit();
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($con);
    }
} else {
    echo "Error al subir la imagen.";
}
?>
