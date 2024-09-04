<?php
    $maior = $_POST['maior'];
    $menor = $_POST['menor'];

    if ($menor > $maior) {
        echo "Você digitou os dados incorretos";
    }
    while ($menor <= $maior) {
        echo $menor , '</br>';
        $menor += 1;
    }   
?>