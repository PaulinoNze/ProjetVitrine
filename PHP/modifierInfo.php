<?php
include '../database.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nom = validate($_POST['nom']);
$prenom = validate($_POST['prenom']);
$email = validate($_POST['email']);
$userid = $_POST['userid'];
$sql = "UPDATE users SET nom = '$nom', prenom = '$prenom', email = '$email' WHERE userid = '$userid'";
if(mysqli_query($conn, $sql)){
    header("Location: ../dashboard/adimin.php?message=Informations modifiées");
    exit();
}else{
    echo "Error updating record: " . mysqli_error($conn);
}
?>