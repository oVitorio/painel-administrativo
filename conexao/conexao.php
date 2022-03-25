<?php

function connect($database = "projeto_php",
                 $servername = "localhost",
                 $username = "root",
                 $password = "",
                 ) {

// tenta fazer a conexao
$connect = mysqli_connect($servername, $username,$password,$database);

    if(!$connect){

        die(trigger_error("Não possivel estabelecer a conexão!"));
       
    }else{
        echo"conexão realizada";
    }

};




echo"teste";
?>