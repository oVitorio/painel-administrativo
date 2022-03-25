<?php
include_once"conexao/db.php";

function inserir($coluna,$valor,$tabela){
    if((is_array($coluna)) and (is_array($valor))){


        // busca a mesma quantidade de valores
        if(count($coluna) == count($valor)){

            //montar o insert
            $insert ="INSERT INTO{$tabela}(". implode(', ',$coluna ).") 
                      VALUES ('".implode('\',\'',$valor).") ";


        }else{
            return false;
        }
    }else{
        $inserir ="INSERT INTO {$tabela} ({$coluna}) VALUES ('{$valor}')";
    }
    // conexão?
    

}



?>