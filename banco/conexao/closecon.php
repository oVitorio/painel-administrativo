<?php
function closeconnection($connect){
    $close = mysqli_close($connect);
    if(!$close){
        echo"erro: impossivel fechar";
    }else{
        return true;
    }
}


?>