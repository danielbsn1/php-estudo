<?php

  $host = "localhost";
  $usuario = "";
  $senha = "";
  $banco = "";

  $con = new mysqli($host,$usuario,$senha,$banco);

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
     
     if ($_POST) {
       $descricao = $_POST['descricao'];
       $sqlInsert = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
       $con->query($sqlInsert);
     }

        $descricao = $conn ->real_escape_string($_POST[""]);

        $sqlInsert = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";


 $tarefa [""];

     $sqlSelect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
    
     $result = $con->query($sqlSelect);

     if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
          $tarefa [] = $row;
        }
     }
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
 </head>
 <body>

  <h1>Todo list</h1>
  <form action="todo_crud.php" method="POST">
    <input type="text" placeholder="Descricao da tarefa">
    <button type="submit">Adicionar</button>
  </form>

     <h2>Suas_tarefas</h2>
     <ul>
        <?php foreach ($tarefa as $t): ?>
           <li><?= $t['descricao'] ?></li>
        <?php endforeach;
        ?>
     </ul>

     <?php if(!empty($tarefa)): ?>
        <h1>exibir lista</h1>
        <?php else: ?>
        <h1>nada aqui</h1>
        <?php endif; ?>

 </body>
 </html>