<?php

// Funções = blocos de código que serão reutilizados 
function boasVindas(): void {
    echo "Seja bem vindo ao sistema\n";
}


boasVindas();

function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(4, 4);


echo "O resultado foi $resultado\n";

$tamanho = strlen("este e o meu texto");

echo "O tamanho do texto e $tamanho\n";

$cores = ["vermelho", "azul", "verde"];

array_push($cores, "preto");

print_r($cores);

?>
