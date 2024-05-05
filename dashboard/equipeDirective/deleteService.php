<?php
include 'conexion.php';
$iDeQuipeDirective = $_REQUEST['iDeQuipeDirective'];


$sqlDeleteEquipe = ("DELETE FROM equipedirective WHERE  iDeQuipeDirective ='".$iDeQuipeDirective."'");
$resultEquipe    = mysqli_query($conn, $sqlDeleteEquipe);
header("Location: equipeDirective.php?cbe=cbe");

?>
  