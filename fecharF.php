<?php
include_once ("classes.php");


$obj= new Database;
$resultado = $obj->connect("UPDATE conf SET situacaoFreq='0'");
header("Location:registro.php");
exit;

?>