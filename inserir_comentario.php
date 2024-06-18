<?php
require_once "classes/Comentario.php";

$comentario = new Comentario();
$comentario->comentarios = $_POST['comentarios'];
$comentario->id_user = $_POST['id_user'];
$comentario->status = 2;
$comentario->inserir();

header("refresh:0.8; url=comentario.php");
?>