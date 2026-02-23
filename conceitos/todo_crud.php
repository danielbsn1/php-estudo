<?php

  $host = "localhost";
  $usuario = "";
  $senha = "";
  $banco = "";

  $con = new mysqli($host,$usuario,$senha,$banco);

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

?>