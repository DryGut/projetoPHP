<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adultos';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
  echo "A opção nome não pode estar vazia";
  return;
}
if(strlen($nome) < 3)
{
  echo "Nome Inválido";
  return;
}
if(strlen($nome) > 40)
{
  echo "Nome Inválido";
  return;
}
if(!is_numeric($idade))
{
  echo "Formato de idade inválido";
  return;
}

if($idade >= 6 && $idade <= 12)
{
  for($i == 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'infantil')
        echo "O Atleta  $nome  inscrito na categoria " .$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 17)
{
  for($i == 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adolescentes')
        echo "O Atleta  $nome  esta inscrito na categoria " .$categorias[$i];
    }
}
else
{
  for($i == 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adultos')
        echo "O Atleta  $nome  esta inscrito na categoria " .$categorias[$i];
    }
}
?>