<?php

// 100 = muito rapido 
// 80 = acima do limite 
// 60 = dentro do limite
// 40 = abaixo do limite

$v1 = 100;
$v2 = 80;
$v3 = 60;
$v4 = 40;
$v5 = 20;


$velocidade = 120;

if($velocidade > 100){
    echo"velocidade muito alta ";
} elseif ($velocidade > 80) {
    echo "acimda do limite ";
} elseif ($velocidade > 60) {
    echo "dentro do liimite";
} elseif ($velocidade > 40) {
    echo "abaixo do limite";
}
?>