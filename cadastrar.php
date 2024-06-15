<?php
require_once "classes/Usuario.php";
$usuario=new Usuario();
$lista=$usuario->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <title>Argentina</title>
  </head>
  <body>
    <h1>Se cadastra seu baitola</h1>
    <form action="efetuar-cadastro.php" method="POST">
        <h1>Cadastro</h1>
        <label for="nome">Nome:</label>
        <input type="nome" id="nome" name="nome">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
        <button type="submit" class="btn-login">Cadastrar-se</button>
    </form>
    <footer class="text-dark"  style="background-color: #b8d1e6;">
  <div class="container-fluid py-3">
    <p><strong>Projeto Volta ao Mundo - Argentina</strong></p>
  </div>
</footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>