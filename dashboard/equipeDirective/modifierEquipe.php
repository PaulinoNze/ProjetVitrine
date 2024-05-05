<?php
include 'conexion.php';

// Verificar si todas las variables están definidas
if (isset($_REQUEST['iDeQuipeDirective'], $_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['descriptionPoste'])) {
    // Asignar valores a las variables
    $iDeQuipeDirective = $_REQUEST['iDeQuipeDirective'];
    $nom = mysqli_real_escape_string($conn, $_REQUEST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_REQUEST['prenom']);
    $descriptionPoste = mysqli_real_escape_string($conn, $_REQUEST['descriptionPoste']);

    // Verificar si se cargó una nueva imagen
    if (!empty($_FILES['image']['name'])) {
        $foto = $_FILES['image']['name'];
        $fotoTmp = $_FILES['image']['tmp_name'];

        $explode = explode('.', $foto);
        $extension_arch = array_pop($explode);
        $namelogoevento = $nuewNameFoto . '.' . $extension_arch;

        $rutaBannerBD = "imgEquipe/" . $namelogoevento;
        $dir = opendir('imgEquipe/');

        // Mover la imagen al directorio de imágenes
        if (move_uploaded_file($fotoTmp, $rutaBannerBD)) {
            // Actualizar el registro en la base de datos con la nueva imagen
            $UpdateEquipe = "UPDATE equipedirective SET nom='$nom', prenom='$prenom', descriptionPoste='$descriptionPoste', image='$rutaBannerBD' WHERE iDeQuipeDirective='$iDeQuipeDirective'";
            $resultadoEquipe = mysqli_query($conn, $UpdateEquipe);

            // Verificar si la consulta fue exitosa
            if (!$resultadoEquipe) {
                echo "Error al ejecutar la consulta: " . mysqli_error($conn);
            }
        } else {
            echo "Error al subir la imagen.";
        }
        closedir($dir);
    } else {
        // Si no se cargó una nueva imagen, actualizar solo los datos de texto y fecha
        $UpdateEquipe = "UPDATE equipedirective SET nom='$nom', prenom='$prenom', descriptionPoste='$descriptionPoste' WHERE iDeQuipeDirective='$iDeQuipeDirective'";
        $resultadoEquipe = mysqli_query($conn, $UpdateEquipe);

        // Verificar si la consulta fue exitosa
        if (!$resultadoEquipe) {
            echo "Error al ejecutar la consulta: " . mysqli_error($conn);
        }
    }

    // Redirigir de vuelta a la página de servicios
    header("Location: equipeDirective.php?dia=dia");
} 
?>
