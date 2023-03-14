<?php
include_once ("classes.php");
include_once ("sessao.php");
$obj= new Database;
$resultado = $obj->connect("SELECT * FROM palavrachave");
while($linha=mysqli_fetch_array($resultado))
{
    $palavrachaveA = $linha['palavrachave'];
}

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

<label>A frequência está <b><?php echo $situacaoFreqC;?></b></label><br>


<form action="altera_palavra.php" type="post" autocomplete="off">
  <div class="form-group">
    <label for="palavrachave"><b>Palavra Chave:</b></label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-key"></i>
        </div>
      </div> 
      <input id="palavrachave" name="palavrachave" type="text" value="<?php echo $palavrachaveA;?>" class="form-control" aria-describedby="palavrachaveHelpBlock">
    </div> 
    
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Alterar Chave</button>
  </div>
</form>

<div class="form-group">
    <label for="palavrachave"><b>Outras Opções:</b></label><br>
    

    <button name="submit" type="submit" onclick="location.href='abrirF.php';"  class="btn btn-success">Abrir Frequência</button>
<button name="submit" type="submit" onclick="location.href='fecharF.php';" class="btn btn-danger">Fechar Frequência</button>

    <br><br>
    <button name="submit" type="submit" class="btn btn-warning">Carregar Alunos</button>
    <button name="submit" type="submit" onclick="location.href='reports.php';" class="btn btn-info">Relatórios</button>
    
    <br>
</div>

    </div>
    <div class="col-md"> </div>
  </div>
</div>




</body>
</html>