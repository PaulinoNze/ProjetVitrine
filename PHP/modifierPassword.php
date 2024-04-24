<?php
include '../database.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$password = $_POST['password'];
$cPassword = $_POST['cPassword'];
$userid = $_POST['userid'];
if($password == $cPassword){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$hash' WHERE userid = $userid";
    if(mysqli_query($conn, $sql)){
        header("Location: ../dashboard/adimin.php?message=Mot de passe changé");
        exit();
    }else{
        echo "Error updating record: " . mysqli_error($conn);
    }
}else{
    header("Location: ../dashboard/modifierPassword.php?error=Les mots de passe ne correspondent pas");
    exit();
}
?>