<?php
try {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = hash("sha256", $_POST["senha"]);
    $tipo = 2;
    $now = new DateTime();
    $date = $now->format('d-m-Y');

    $sql = "INSERT INTO usuario (nome, email, senha, tipo, datacad) VALUES (:nome, :email, :senha, :tipo, :datacad)";

    include_once "classes/conexao.php";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->bindParam(':datacad', $date);

    $stmt->execute();
    echo "<h3>Registro gravado com sucesso!</h3>";
    echo "<a href='login.php'>Fazer Login</a>";
} catch (Exception $erro) {
    echo $erro->getMessage();
    echo "Ocorreu um erro, tente novamente";
}
?>