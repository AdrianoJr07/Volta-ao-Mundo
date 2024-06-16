<?php
$email = $_POST["email"];
$senhalimpa= $_POST["senha"];
$senha=hash("sha256",$senhalimpa);


$sql = "SELECT * FROM usuario WHERE 
        email=:email and senha=:senha";

include_once "classes/conexao.php";
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':email', $email);
$resultado->bindParam(':senha', $senha);
$resultado->execute();
$linha=$resultado->fetch();
$usuario_logado=$linha ['email'];



if ($usuario_logado == null) {
	header('Location: erro.php');
} 


else{
	session_start();
	$_SESSION['usuario_logado'] = $usuario_logado;
	header('Location: adm.php');
}
?>