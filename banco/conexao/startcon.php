<?php


function connect($servername = "localhost",
                 $database = "projeto_php",
                 $username = "root",
                 $password = ""){

        $connect = mysqli_connect($servername,$username,$password);
        
        if(!$connect){
            die(trigger_error("não foi possivel estabeceler a conexão"));
            return false;
        }else{

            $db = mysqli_select_db($database, $connect);
            if(!$db){
                die(trigger_error("não foi possivel selecionar o banco"));
                return false;
            }else{
                return $connect;
            }
        }
}



?>