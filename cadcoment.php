<?php
session_start();
require_once "classes/Comentario.php";
require_once "classes/Usuario.php";

// Verificar se o usuário está logado
if (!isset($_SESSION['id_user'])) {
    header('Location: login.php');
    exit;
}

$comentarios = new Comentario();
$usuarios = new Usuario();
$lista = $comentarios->listar();
$listausuario = $usuarios->listar();

$id_user = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Novo Comentário</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b8d1e6;">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.html"><img src="img/bandeira-arg.jpg" width="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pontos-turisticos.html">Pontos Turisticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="culinaria.html">Culinária</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="vinicolas.html">Vinicolas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="messi.html">Messi</a>
                </li>
                
        </div>
    </div>
</nav>
<br><br>
<div class="container">
    <center>
        <h1>Novo Comentário</h1>
        <form action="inserir_comentario.php" method="POST">
            <input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
            <label for="comentarios">Comentário:</label> 
            <textarea rows="5" cols="80" id="comentarios" name="comentarios"></textarea><br>
            <button type="submit" class="btn-login">Enviar comentário</button>
        </form>
        <br>
        <button><a href="comentario.php">Voltar</a></button>
    </center>
</div>
<br><br>
<div class="container-fluid"> 
    <footer class="footer text-center py-1 fixed-bottom" style="background-color: #b8d1e6;">
        <p><strong>Projeto Volta ao Mundo - Argentina</strong></p>
    </footer>
    <!-- JavaScript (Opcional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
</body>
</html>
