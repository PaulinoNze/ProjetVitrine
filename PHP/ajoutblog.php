<?php
include "../database.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$date = date("Y-m-d"); 
$title = validate(mysqli_real_escape_string($conn, $_POST['title']));
$content = mysqli_real_escape_string($conn, $_POST['content']); 
$description = mysqli_real_escape_string($conn, $_POST['description']); 
$link = mysqli_real_escape_string($conn, $_POST['link']); 
if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK){
    $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "INSERT INTO blog(blogNom, description, content, datePublished, image, link) VALUES ('$title', '$description', '$content', '$date', '$imgData', '$link')";
} else {
    $sql = "INSERT INTO blog(blogNom, description, content, datePublished, link) VALUES ('$title', '$description', '$content', '$date', '$link')";
}

if(mysqli_query($conn, $sql)) {
    header("Location: ../dashboard/DashboardBlogActualite.php?message=Blog ajouté avec succès");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
