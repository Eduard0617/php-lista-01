<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if($idade >= 18) {
        echo $nome, " é MAIOR de 18 e tem ", $idade, " anos.";
    } 
    else if($idade < 18) {
        echo $nome, " é MENOR de 18 e tem ", $idade, " anos.";
    }

?>