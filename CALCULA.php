<?php
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $Resultaldo = 0;
    $sinal = $_GET["sinal"];

    if ($sinal == "+"){
        $Resultaldo = $numero1 + $numero2;
            echo " O Resultado é $Resultaldo ";
    }
    elseif ($sinal == "-"){
        $Resultaldo = $numero1 - $numero2;
            echo " O Resultado é $Resultaldo ";
    }
    elseif ($sinal == "*"){
        $Resultaldo = $numero1 * $numero2;
            echo " O Resultado é $Resultaldo ";
    }
    elseif ($sinal == "/" && $numero2 == 0){
        echo "Não é possível dividir por zero!";  
    }
    elseif ($sinal == "/" ){
        $Resultaldo = $numero1 / $numero2;
            echo "O resultado é $Resultaldo ";
    }
?>