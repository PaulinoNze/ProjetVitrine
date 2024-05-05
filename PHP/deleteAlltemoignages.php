<?php
include '../database.php';
$sql = "DELETE FROM temoignages";
if(mysqli_query($conn, $sql)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>