<?php

 $caminhoArquivo = 'filem.json' ;
 $conteudArquivoFilme = file_get_contents($caminhoArquivo);
 $filme = json_decode($conteudArquivoFilme,true);

 var_dump($filme);

?>