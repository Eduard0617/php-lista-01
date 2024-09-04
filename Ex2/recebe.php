<?php
    $numero = $_POST["mes"];
    if ($numero == 1){
        echo "<h1>Janeiro</h1>";
    }
    if ($numero == 2){
        echo "<h1>Fevereiro</h1>";
    }
    if ($numero == 3){
        echo "<h1>Março</h1>";
    }
    if ($numero == 4){
        echo "<h1>Abril</h1>";
    }
    if ($numero == 5){
        echo "<h1>Maio</h1>";
    }
    if ($numero == 6){
        echo "<h1>Junho</h1>";
    }
    if ($numero == 7){
        echo "<h1>Julho</h1>";
    }
    if ($numero == 8){
        echo "<h1>Agosto</h1>";
    }
    if ($numero == 9){
        echo "<h1>Setembro</h1>";
    }
    if ($numero == 10){
        echo "<h1>Outubro</h1>";
    }
    if ($numero == 11){
        echo "<h1>Novembro</h1>";
    }
    if ($numero == 12){
        echo "<h1>Dezembro</h1>";
    }
    elseif ($numero > 12 or $numero <1){
        echo "<h1>Não existe mês com esse número</h1>";
    }
?>