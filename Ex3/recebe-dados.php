<?php

    $nota = $_POST['nota'];

    if($nota < 0 or $nota > 10) {
        echo "Nota Inválida<br/>";
        
        echo "<button><a href='index.php'>Retornar</a></button>";
    }

    else{
        echo "Nota aceita pelo sistema!";
    }

    

?>