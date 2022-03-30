<?php

session_start();

function setarMsgSucesso(string_$mensagem) : void
{
  $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMsgSucesso() : ?string
{
  if(isset($_SESSION['mensagm-de-sucesso']))
    return $_SESSION['mensagem-de-sucesso'];
  return null;
}

function setarMsgError(string_$mensagem) : void
{
  $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMsgError() : ?string
{
  if(isset($_SESSION['mensagm-de-erro']))
    return $_SESSION['mensagem-de-erro'];
  return null;
}

function removerMsgSucesso() : void
{
  if(isset($_SESSION['mensagm-de-sucesso']))
    unset($_SESSION['mensagem-de-sucesso']);
}

function removerMsgError() : void
{
  if(isset($_SESSION['mensagm-de-erro']))
    unset($_SESSION['mensagem-de-erro']);
}
?>