<?php

    if (isset($_GET[""])) {
        $nome =htmlspecialchars_decode ($_GET["nome"]);
        echo"OLa seja bem vindo $nome";
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu formulario</title>
</head>
<body>
    <form action="formulario.php" method="GET">
    <h2>Exemplo de form</h2>
    <label for="nome">Seu nome:</label>
    <label for="text" id="nome" name="none"></label>
    <button type="submit">enviar</button>
    </form>
</body>
</html>