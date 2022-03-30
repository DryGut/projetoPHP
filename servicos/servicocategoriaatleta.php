<?php

function defineCategoriaAtleta(string_$nome, string_$idade) : ?string
{
  
  $categorias = [];
  $categorias[] = 'infantil';
  $categorias[] = 'adolescentes';
  $categorias[] = 'adultos';

  if(validaNome($nome) && validaIdade($idade))
  {
    removerMsgError();
    if($idade >= 6 && $idade <= 12)
    {
      for($i = 0; $i <= count($categorias); $i++)
        {
          if($categorias[$i] == 'infantil')
          {
            setarMsgSucesso(mensagem("O Atleta  $nome  inscrito na categoria " .$categorias[$i]));
            return null;
          }
        }
    }
    else if($idade >= 13 && $idade <= 17)
    {
      for($i = 0; $i <= count($categorias); $i++)
        {
          if($categorias[$i] == 'adolescentes')
          {
            setarMsgSucesso(mensagem("O Atleta  $nome  esta inscrito na categoria " .$categorias[$i]));
            return null;
          }
        }
    }
    else
    {
      for($i = 0; $i <= count($categorias); $i++)
        {
          if($categorias[$i] == 'adultos')
          {
            setarMsgSucesso(mensagem("O Atleta  $nome  esta inscrito na categoria " .$categorias[$i]));
            return null;
          }
        }
    }
  }
  else
  {
    removerMsgSucesso();
    return obterMsgError();
  }
}
?>