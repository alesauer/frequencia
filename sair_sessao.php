<?php
include ("sessao.php");
$login =  $_SESSION["login"];
session_destroy();
header("Location:login.php");
?>
