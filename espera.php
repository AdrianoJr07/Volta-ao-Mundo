<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

require_once "classes/Comentario.php";
$comentarios = new Comentario();
$lista = $comentarios->listarespera();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Argentina</title>
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
                    
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <center>
    <table border="3">
            <tr>
                <th>Email</th>
                <th>Comentários</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($lista as $linha): ?>
                <tr>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['comentarios']; ?></td>
                    <td>
                        <form action="alterarcomentario.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                            <input type="hidden" name="acao" value="aceitar">
                            <button type="submit" class="btn btn-success">Aceitar</button>
                        </form>
                        <td><a href="excluircomentario.php?id=<?=$linha['id']?>"><button type="submit" class="btn btn-danger">Excluir</button></a></td>
                        
                    </td>
                </tr>
            <?php endforeach; ?> 
        </table>
        <button><a href="listarcomentadm.php">voltar</a></button>
    </center>

    <div class="container-fluid">
        <footer class="footer text-center py-1 fixed-bottom" style="background-color: #b8d1e6;">
            <p><strong>Projeto Volta ao Mundo - Argentina</strong></p>
        </footer>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
