<?php

 function soma ($a=4, $b= 4, $c= "ola") {
  
       return $a + $b + $c;
      
    $resultado = soma ($a, $b, $c);

    echo $resultado;
 }

 function imc ($peso, $altura) {
    return $peso / ($altura * $altura);
    echo "seu imc é: " . $imc;

 }


 function graus ($celsius, $fahrenheit) {
    return $celsius * 1.8 + 32;
    echo "graus fahrenheit: " . $fahrenheit;
 }
?>