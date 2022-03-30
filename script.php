<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adultos';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
  $_SESSION['mensagem-de-erro'] = "A opção nome não pode estar vazia";
  header(string('location: index.php'));
  return;
}
else if(strlen($nome) < 3)
{
  $_SESSION['mensagem-de-erro'] = "Formato Invalido";
  header(string('location: index.php'));
  return;
}
else if(strlen($nome) > 40)
{
  $_SESSION['mensagem-de-erro'] = "Tamanho Invalido";
  header(string('location: index.php'));
  return;
}
else if(!is_numeric($idade))
{
  $_SESSION['mensagem-de-erro'] = "Numero Invalido";
  header(string('location: index.php'));
  return;
}

if($idade >= 6 && $idade <= 12)
{
  for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'infantil')
      {
        $_SESSION['mensagem-de-sucesso'] = "O Atleta  $nome  inscrito na categoria " .$categorias[$i];
        header(string('location: index.php'));
        return;
      }
    }
}
else if($idade >= 13 && $idade <= 17)
{
  for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adolescentes')
      {
        $_SESSION['mensagem-de-sucesso'] = "O Atleta  $nome  esta inscrito na categoria " .$categorias[$i];
        header(string('location: index.php'));
        return;
      }
    }
}
else
{
  for($i = 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adultos')
      {
        $_SESSION['mensagem-de-sucesso'] = "O Atleta  $nome  esta inscrito na categoria " .$categorias[$i];
        header(string('location: index.php'));
        return;
      }
    }
}
?>