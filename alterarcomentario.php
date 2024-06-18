<?php
require_once "classes/Comentario.php";
$id=$_POST['id'];
$acao=$_POST['acao'];
$comentario=new Comentario($id);
if ($acao == 'aceitar') {
    $comentario->status = 1;}
$comentario->atualizar();
header('location:espera.php');
?>
