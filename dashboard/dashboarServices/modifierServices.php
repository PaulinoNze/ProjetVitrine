<?php
include 'conexion.php';

// Variables del formulario
$id = $_REQUEST['id'];
$nom = $_REQUEST['nom'];
$description = $_REQUEST['description'];
$date = $_REQUEST['date']; // Agregamos la variable para la fecha

// Verificar si se cargó una nueva imagen
if (!empty($_FILES['image']['name'])) {
    $foto = $_FILES['image']['name'];
    $fotoTmp = $_FILES['image']['tmp_name'];

    // Obtener la fecha actual para generar un nombre único para la imagen
    date_default_timezone_set("America/Bogota");
    $nuewNameFoto = date('h_i_s_a', time());

    $explode = explode('.', $foto);
    $extension_arch = array_pop($explode);
    $namelogoevento = $nuewNameFoto . '.' . $extension_arch;

    $rutaBannerBD = "imgService/" . $namelogoevento;
    $dir = opendir('imgService/');

    // Mover la imagen al directorio de imágenes
    if (move_uploaded_file($fotoTmp, $rutaBannerBD)) {
        // Actualizar el registro en la base de datos con la nueva imagen
        $UpdateService = "UPDATE service SET nom='$nom', description='$description', image='$rutaBannerBD', date='$date'  WHERE id='$id'";
        $resultadoService = mysqli_query($conn, $UpdateService);

        // Verificar si la consulta fue exitosa
        if (!$resultadoService) {
            echo "Error al ejecutar la consulta: " . mysqli_error($con);
        }
    } else {
        echo "Error al subir la imagen.";
    }
    closedir($dir);
} else {
    // Si no se cargó una nueva imagen, actualizar solo los datos de texto y fecha
    $UpdateService = "UPDATE service SET nom='$nom', description='$description', date='$date' WHERE id='$id'";
    $resultadoService = mysqli_query($conn, $UpdateService);

    // Verificar si la consulta fue exitosa
    if (!$resultadoService) {
        echo "Error al ejecutar la consulta: " . mysqli_error($con);
    }
}

// Redirigir de vuelta a la página de servicios
header("Location: DashboardService.php?dia=dia");
?>
