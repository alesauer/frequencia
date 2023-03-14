<?php
include_once ("classes.php");


$usuario_login = $_POST["usuario_login"];
$senha_login = $_POST["senha_login"];



$usuario_login = addslashes($_POST["usuario_login"]);
$senha_login = md5($_POST["senha_login"]);

//echo "Senha aberta : $senha_login - Senha_md5: $senha_login User: $usuario_login<br>"; exit;
//date_default_timezone_set('America/Sao_Paulo');
//$data=date("d/m/Y");
 


 $obj= new Database;
 $resultado = $obj->connect("select * from usuario where login='$usuario_login'");
 

 
 
if(mysqli_num_rows($resultado) > 0)
{


	while($linha=mysqli_fetch_array($resultado))
	    {
		$cod=trim($linha["cod"]);
		$login=trim($linha["login"]);
	    $pass=trim($linha["senha"]);
	    $email=trim($linha["email"]);
//echo "Senha bco: $pass<br>Senha for: $senha_login<br>Nome bco: $login<br>Nome for: $usuario_login";  exit;
	  
	      if($login=="$usuario_login" and $pass=="$senha_login")
	        {
				
	         session_start();
	         session_name("freq");	
			
			 $_SESSION["cod"] =  $cod;
			 $_SESSION["login"] =  $login;
	         $_SESSION["senha"] = $pass;
	         
			header("Location:registro.php");
			exit;
			}
			 else { 
				 	unset ($_SESSION['login']);
	    			unset ($_SESSION['senha']);
	    			session_destroy();
				 	header("Location:login.php");
					exit;
			}
	}

}//end if num_rows
 else { 
				header("Location:login.php");
				exit;
			}
 exit; 
?>