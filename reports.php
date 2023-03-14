<?php
include ("sessao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Presença</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php  include_once("navbar.php"); ?>

<div class="container">
    <div class="container">
     <br>

     <?php
include_once ("classes.php");
$obj= new Database;

$resultado = $obj->connect("SELECT dataF from conf");
$i=0;
while($linha=mysqli_fetch_array($resultado))
{   
    $dataF = $linha['dataF'];
}
?>

     <h1>Frequência dos alunos em <?php echo "$dataF";  ?></h1>   
     <br>
     <h3>Alunos Presentes</h3>   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Matrícula</th>
      <th scope="col">IP</th>
 
    </tr>
  </thead>
  <tbody>

<?php
include_once ("classes.php");
$obj= new Database;

$resultado = $obj->connect("SELECT alunos.nome as nome, freq.matricula as matricula, freq.dataP as dataP, freq.ip as ip FROM alunos, freq WHERE alunos.matricula = freq.matricula
ORDER BY nome asc");
$i=0;
while($linha=mysqli_fetch_array($resultado))
{   $i++;
    $nome = $linha['nome'];
    $matricula = $linha['matricula'];
    $dataP = $linha['dataP'];
    $ip = $linha['ip'];
    echo "<tr>
    <th scope='row'>$i</th>
    <td>$nome</td>
    <td>$matricula</td>
    <td>$ip</td>
   
  </tr>";
}
?>
</tbody>
</table>

<br><br>
     <h3>Alunos Ausentes</h3>   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Matrícula</th>
    
    </tr>
  </thead>
  <tbody>

<?php
include_once ("classes.php");
$obj= new Database;

$resultado = $obj->connect("select alunos.nome, alunos.matricula FROM alunos WHERE  not exists (select freq.matricula from freq where freq.matricula = alunos.matricula) ORDER BY nome");
$j=0;
while($linha=mysqli_fetch_array($resultado))
{
    $j++;
    $nome = $linha['nome'];
    $matricula = $linha['matricula'];
    
    echo "<tr>
    <th scope='row'>$j</th>
    <td>$nome</td>
    <td>$matricula</td>
    
  </tr>";
}
?>
</tbody>
</table>



<br><br>
     <h3>IPs Duplicados</h3>   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">IP</th>
      <th scope="col">QTDE</th>
    
    </tr>
  </thead>
  <tbody>

<?php
include_once ("classes.php");
$obj= new Database;

$resultado = $obj->connect("SELECT ip, COUNT(*) as Qtde FROM freq GROUP BY ip HAVING COUNT(*) > 1");
$j=0;
while($linha=mysqli_fetch_array($resultado))
{
    $j++;
    $ip = $linha['ip'];
    $Qtde = $linha['Qtde'];
    
    echo "<tr>
    <th scope='row'>$j</th>
    <td>$ip</td>
    <td>$Qtde</td>
    
  </tr>";
}
?>
</tbody>
</table>




</div>




</body>
</html>