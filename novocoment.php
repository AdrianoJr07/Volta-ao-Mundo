<?php
require_once "classes/Comentario.php";

$comentario = new Comentario();
$comentario->comentarios = $_POST['comentarios'];
$comentario->id = $_POST['id']; 
$comentario->id_user = $_POST['id_user']; 
$comentario->inserir(); 

header("refresh:0.8; url=comentario.php");
?>
