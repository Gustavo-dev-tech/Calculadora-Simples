
<?php
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $Resultaldo = 0;
    $sinal = $_GET["sinal"];

    if ($sinal == "+"){
        $Resultaldo = $numero1 + $numero2;
        
    }
    elseif ($sinal == "-"){
        $Resultaldo = $numero1 - $numero2;
        
    }
    elseif ($sinal == "*"){
        $Resultaldo = $numero1 * $numero2;
        
    }
    elseif ($sinal == "/"){
        if ($numero2!= 0){
            $Resultaldo = $numero1 / $numero2;
        }
        else{
            echo "Não é possível dividir por zero!";
        }
    }
    echo " The resultado is $Resultaldo";
    ?>
