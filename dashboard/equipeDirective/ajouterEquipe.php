<?php
include 'conexion.php';

// Variables del formulario
$nom = mysqli_real_escape_string($conn, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($conn, $_REQUEST['prenom']);
$descriptionPoste = mysqli_real_escape_string($conn, $_REQUEST['descriptionPoste']);

// Variables del archivo de imagen
$image = $_FILES['image']['name'];
$imageTmp = $_FILES['image']['tmp_name'];

// Ruta donde se guardará la imagen
$rutaBannerBD = "imgEquipe/" . $image;

// Mover la imagen al directorio de imágenes
if (move_uploaded_file($imageTmp, $rutaBannerBD)) {
    // Consulta SQL para insertar datos en la tabla
    $query = "INSERT INTO equipeDirective (nom, prenom, descriptionPoste, image)
              VALUES ('" . $nom . "', '" . $prenom . "', '" . $descriptionPoste . "', '" . $rutaBannerBD . "')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        header("Location: equipeDirective.php?cr=cr"); // Redirigir si la inserción fue exitosa
        exit();
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($con);
    }
} else {
    echo "Error al subir la imagen.";
}
?>
