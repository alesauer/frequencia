<?php
include_once ("classes.php");
$obj= new Database;

$resultado = $obj->connect("SELECT * FROM conf");
while($linha=mysqli_fetch_array($resultado))
{
    $situacaoFreq = $linha['situacaoFreq'];
}

if($situacaoFreq=="1")
{
    $situacaoFreqC = "ABERTA!";
}else{
    $situacaoFreqC = "FECHADA!";
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Presença</title>
</head>
<body>

<?php  include_once("navbar.php"); ?>

<br><br>
<div class="container">

  <div class="row">
    <div class="col-md"></div>
    <div class="col-md">
  


<div align="center">
<img src="logo.png" width="80px" height="50px">    
</div>


<form action="verifica.php" type="post" autocomplete="off">
  <div class="form-group">
    <label for="matricula"><b>Matrícula:</b></label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card-o"></i>
        </div>
      </div> 
      <input id="matricula" name="matricula" type="text" aria-describedby="matriculaHelpBlock" class="form-control">
    </div> 
    <span id="matriculaHelpBlock" class="form-text text-muted">Digite a sua Matrícula</span>
  </div>
  <div class="form-group">
    <label for="palavrachave"><b>Palavra Chave:</b></label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-key"></i>
        </div>
      </div> 
      <input id="palavrachave" name="palavrachave" type="text" class="form-control" aria-describedby="palavrachaveHelpBlock">
    </div> 
    <span id="palavrachaveHelpBlock" class="form-text text-muted">Palavra chave disponibilizada pelo Professor</span>
  </div> 
  <div class="form-group">
        <?php
        if($situacaoFreq=="1")
        {
            echo "<button name='submit' type='submit' class='btn btn-primary'>Registrar</button>";
        }else{
            echo "<div class='alert alert-primary' role='alert'>Frequência não está aberta! Aguarde...</div>";
        }
        ?>




</div>
</form>

<?php
if (isset($_REQUEST["sit"]) == "1"){
echo "<div class='alert alert-primary' role='alert'> Frequência Registrada!</div>";
}

if (isset($_REQUEST["jaFreq"]) == "1"){
  echo "<div class='alert alert-primary' role='alert'> Você já <b>registrou</b> a sua Frequência!</div>";
}
  
if (isset($_REQUEST["chaveErrada"]) == "1"){
  echo "<div class='alert alert-primary' role='alert'> A matrícula ou chave digitada <b>não</b> confere!</div>";
}


?>

    </div>
    <div class="col-md"> </div>
  </div>
</div>




</body>

</html>