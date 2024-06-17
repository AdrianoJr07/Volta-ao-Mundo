<?php
require_once "classes/Comentario.php";

$comentario = new Comentario();
$comentario->comentario = $_POST['comentario']; // Obtém o comentário do formulário
$comentario->id = $_POST['id']; // Obtém o id do formulário
$comentario->id_user = $_POST['id_user']; // Obtém o id_user do formulário

$comentario->inserir(); // Chama o método inserir() da classe Comentario

// Redireciona para a página comentario.php após 0.8 segundos
header("refresh:0.8; url=comentario.php");
?>
