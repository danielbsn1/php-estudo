<?php

// OPERADORES

 //+,-, /,*

 echo "soma". (10 + 5 );
 $a = 12;
 $b = 2;

 echo "<br>subtracao". ($a - $b);

 echo "<br>sub negativa ". ($a + $b);

 echo "<br>divisao". ($a / $b);

 echo "<br>multiplicacao". ($a * $b);

 //==, ===, !=

$c = "12";

echo "igualdade". ($a == $c? "Verdadeiro" : "false ");  


echo "indentico". ($a === $c ? "verdadeiro" : "falso");
echo "indentico". ($a === 12 ? "verdadeiro" : "falso");

echo "diferente". ($a != $b ? "VERDADEIRO" : "FALSO");

// operadores logicos 
//OR se uma apenas for verdadeira
//and se as duas forem verdadeiras 
// not  inverte o boleano 

$idade = 20;
$podeDirigir = FALSE;
 // true e ! false = true
echo "Deve tirar a carteira ?" . (($idade >=18 AND $podeDirigir) ? " sim " : "nao");

// true ou false 
echo "E de maior de idade ? " . (($idade >= 18 || $podeDirigir ) ? "sim": "nao");

//operadores de atribuicao

$saldo += 100;

echo "saldo atual: " .$saldo;

$saldo *= 100;
echo "saldo atual: " .$saldo;

$saldo /= 100;
echo "saldo atual: " .$saldo;

?>


