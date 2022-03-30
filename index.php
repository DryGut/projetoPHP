<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width inicial-scale*1">
  </head>
<body>

<p>FORMULÁRIO DE INSCRIÇÃO DOS ATLETAS</p>

<form action="script.php" method="post">
  <?php
      $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
      if(!empty($mensagemDeSucesso))
      {
        echo $mensagemDeSucesso;
      }

      $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
      if(!empty($mensagemDeErro))
      {
        echo $mensagemDeErro;
      }

  ?>
  <p>Seu Nome: <input type="text" name="nome" /></p>
  <p>Sua idade: <input type="text" name="idade" /></p>
  <p><input type="submit" value="Enviar dados do Atleta"/></p>
</form>

</body>

</html>