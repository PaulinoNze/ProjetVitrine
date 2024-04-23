<?php
include "../database.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$date = date("Y-m-d");
$nom = validate(mysqli_real_escape_string($conn, $_POST['nom']));
$prenom = validate(mysqli_real_escape_string($conn, $_POST['prenom']));
$commentaire = validate(mysqli_real_escape_string($conn, $_POST['commentaire']));
$blogid = $_POST['blogid'];

$sql = "INSERT INTO commentaire (commentaire, nom, prenom, blogid, datePublished) VALUES ('$commentaire', '$nom', '$prenom', '$blogid', '$date')";

if(mysqli_query($conn, $sql)) {
    header ("Location: ../blogContent.php?id=$blogid");
    exit();
} else {
    // Redirect to error page
    header("Location: ../error.php");
    exit();
}
?>