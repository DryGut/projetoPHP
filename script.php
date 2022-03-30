<?php

include "servicos/msgsessao.php";
include "servicos/servicovalidacao.php";
include "servicos/servicocategoriaatleta.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaAtleta($nome, $idade);
header(string('location: index.php'));

?>