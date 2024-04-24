<?php
include '../database.php';
$sqlComents = "DELETE FROM commentaire";
mysqli_query($conn, $sqlComents);
$sql = "DELETE FROM blog";
if(mysqli_query($conn, $sql)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>