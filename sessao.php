<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	session_destroy();
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
    }
//echo $logado;
?>