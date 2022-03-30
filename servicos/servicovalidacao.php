<?php

function validaNome(string_$nome) : bool
{
  if(empty($nome))
  {
      setarMsgError(mensagem("A opção nome não pode estar vazia"));
      return false;
  }
  else if(strlen($nome) < 3)
  {
      setarMsgError(mensagem("Formato Invalido"));
      return false;
  }
  else if(strlen($nome) > 40)
  {
      setarMsgError(mensagem("Tamanho Invalido"));
      return false;
  }
  return true;
}
function validaIdade(string_$idade) : bool
{
  if(!is_numeric($idade))
  {
      setarMsgError(mensagem("Numero Invalido"));
      return false;
  }
  return true;
}
?>