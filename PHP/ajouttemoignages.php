<?php
include '../database.php';
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nom = validate(mysqli_real_escape_string($conn, $_POST['nom']));
$prenom = validate(mysqli_real_escape_string($conn, $_POST['prenom']));
$fullname = $prenom. " ". $nom;
$temoignages = validate(mysqli_real_escape_string($conn, $_POST['temoignages']));
if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
    $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "INSERT INTO temoignages(fullname, temoignages, image) VALUES ('$fullname', '$temoignages', '$imgData')";
}else{
    $sql = "INSERT INTO temoignages(fullname, temoignages) VALUES ('$fullname', '$temoignages')";
}
if(mysqli_query($conn, $sql)) {
    header("Location: ../apropos.php?message=Ajouté avec succès");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>