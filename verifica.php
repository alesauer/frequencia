<?php
include_once ("classes.php");
include_once ("verip.php");

$matricula = trim($_REQUEST["matricula"]);
$palavrachave = trim($_REQUEST["palavrachave"]);

//echo "$matricula - $palavrachave";

$obj= new Database;
$resultado = $obj->connect("SELECT * FROM alunos WHERE matricula = '$matricula'");
if(mysqli_num_rows($resultado) > 0){
    $obj1= new Database;
    $resultado1 = $obj1->connect("SELECT palavrachave FROM palavrachave WHERE palavrachave = '$palavrachave'");
    if(mysqli_num_rows($resultado1) > 0){
        while($linha=mysqli_fetch_array($resultado))
        {   
            $matricula = $linha['matricula'];
            $nome = $linha['nome'];
            $dataAtual = date("Y-m-d");


            $obj3= new Database;
            $resultado3 = $obj3->connect("SELECT matricula FROM freq WHERE matricula = '$matricula'");
            if(mysqli_num_rows($resultado3) > 0){ //se ja fez presença
                header("Location:index.php?jaFreq='1'");
                exit;
            }
            else{
            $ip=qualip();
            $obj2= new Database;
            $resultado2 = $obj2->connect("INSERT INTO freq(matricula,dataP,ip) VALUES ('$matricula', '$dataAtual','$ip')");
            header("Location:index.php?sit='1'");
            exit;
            }
        }
    }
    else{
        header("Location:index.php?chaveErrada='1'");
        exit;
    }
}else{
    header("Location:index.php?chaveErrada='1'");
    exit;
}

?>