<?php
include_once ("classes.php");

$palavrachave = trim($_REQUEST["palavrachave"]);

//echo "$matricula - $palavrachave";

$obj= new Database;
$resultado = $obj->connect("UPDATE palavrachave SET palavrachave='$palavrachave'");
header("Location:registro.php");
exit;


?>