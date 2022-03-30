<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecentes';
$categorias[] = 'adultos';
//print_r($categorias);

$nome = 'Renato';
$idade = 37;
//var_dump($nome);
//var_dump($idade);

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
      if($categorias[$i] == 'adolecentes')
        echo "O Atleta  $nome  esta inscrito na categoria " .$categorias[$i];
    }
}
else
{
  for($i == 0; $i <= count($categorias); $i++)
    {
      if($categorias[$i] == 'adultos')
        echo "O Atleta  $nome  esta inscrito a categoria " .$categorias[$i];
    }
}
?>