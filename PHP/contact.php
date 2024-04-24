<?php
include '../database.php';
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name= validate($_POST['name']);
$email = validate($_POST['email']);
$phone = validate($_POST['phone']);
$message = validate($_POST['message']);
$date = date("Y-m-d");
$sql = "INSERT INTO contact(fullname, email, telephone, message, datePosted) VALUES ('$name', '$email', '$phone', '$message', '$date')";
if(mysqli_query($conn, $sql)){
    header("Location: ../contact.php?message=Message envoyé");
    exit();
}else{
    echo "Error updating record: " . mysqli_error($conn);
}
?>