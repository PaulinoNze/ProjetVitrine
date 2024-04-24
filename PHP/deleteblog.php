<?php
include '../database.php';
$blogid = $_POST['blogid'];
$sqlComents = "DELETE FROM commentaire WHERE blogid = $blogid";
mysqli_query($conn, $sqlComents);
$sql = "DELETE FROM blog WHERE blogid = $blogid";
if(mysqli_query($conn, $sql)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>