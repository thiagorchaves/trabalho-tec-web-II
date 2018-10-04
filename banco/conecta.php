<?php

$conexao = mysqli_connect("localhost","teste","teste","projetos") or die ("Erro na Conexão com o banco!". mysqli_error());

mysqli_set_charset($conexao, 'utf8');


?>