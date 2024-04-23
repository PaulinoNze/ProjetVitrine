<?php
include 'conexion.php';
$id    			= $_REQUEST['id'];


$sqlDeleteService = ("DELETE FROM service WHERE  id='".$id."' ");
$resultService    = mysqli_query($conn, $sqlDeleteService);
header("Location:DashboardService.php?cbe=cbe");

?>
  