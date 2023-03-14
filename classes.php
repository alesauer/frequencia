<?php

class Database
{
    function connect($query)
    {
        $_host = 'localhost';
        $_user = 'root';
        $_password = 'GxgLTr201@';
        $_database = 'freq';
        
        $conn = mysqli_connect($_host,$_user,$_password) or die("<h4>Erro: Conexão não pode ser realizada: $_host - $_user - $_password - $_database</h4>");
        $banco = mysqli_select_db($conn,$_database) or die("Erro: Banco de Dados não encontrado: $_database");
        mysqli_set_charset($conn,'utf8');
        $result = mysqli_query($conn,$query) or die("Erro: Query: $query");
        return($result);
        exit;
    }
}//end class


class Datas{
    function get_dia(){
        return date("d");
        exit;
    }

    function get_mes(){
        return date("m");
        exit;
    }

    function get_ano(){
        return date("Y");
        exit;
    }

    function get_data_ymd(){
        return date("Y-m-d");
        exit;
    }
}//End Datas class





?>  

