<?php
include_once ("classes.php");

$dataF=date("Y-m-d");
$obj= new Database;
$resultado = $obj->connect("UPDATE conf SET situacaoFreq='1'");
$resultado = $obj->connect("UPDATE conf SET dataF='$dataF'");
$resultado = $obj->connect("DELETE from freq");
header("Location:registro.php");
exit;

?>