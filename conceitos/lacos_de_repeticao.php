<?php

//while , do while , for
// repertir um codigo x vezes 
// onde x ela e baseada numa condicao 
// quando agente ultrapassa essa cond o loop acaba 
//for (Incrementador; condicao ; incremento) {//}
 for ($i = 0; $i <= 10; $i++) {
    if ($i > 5) {
          echo "feijao <br>";
    }
    echo "arroz $i <Br>";

}
for($j = 20; $j > 10; $j--) {
    echo "arroz <br>";
}

//while
$contador = 1;

while ($contador <= 10) {
    echo "vou comprar uma casa <br>";

    $contador++;
}

// foreach -> array
$frutas = ["laranja", "banana", "uva"];
foreach ($frutas as $fruta){
    echo "fruta $fruta <br>";
}

$pessoas = [
    'matheus'=> 3000,
    'ana'=> 400,
    'joao' => 500
];

echo '->' . $pessoas ['matheus'];
foreach ($pessoas as $pessoa => $salario){
    echo "dados: $pessoa ganha $salario <br>";
}
?>