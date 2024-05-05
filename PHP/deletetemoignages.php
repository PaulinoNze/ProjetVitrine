<?php
include '../database.php';
$temoignagesId = $_POST['temoignagesId'];
$sql = "DELETE FROM temoignages WHERE temoignagesId = $temoignagesId";
if(mysqli_query($conn, $sql)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>