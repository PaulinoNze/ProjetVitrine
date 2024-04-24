<?php
include '../database.php';
$sql = "DELETE FROM contact";
if(mysqli_query($conn, $sql)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>