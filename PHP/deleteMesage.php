<?php
include '../database.php';
$contactid = $_POST['contactid'];
$sql = "DELETE FROM contact WHERE contactid = $contactid";
if(mysqli_query($conn, $sql)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>