<?php
    $intervalo = rand(1, 50);
    $adivinhe = $_POST ['adivinhe'];

    if ($adivinhe == $intervalo) {
        echo "<h1>Você acertou!!!</h1>";
    } 
    else {
        echo "<h1>Tente novamente q-q)</h1>";
    }
?>