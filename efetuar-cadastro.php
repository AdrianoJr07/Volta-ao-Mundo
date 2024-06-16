<?php
    try{
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $senha=hash("sha256",$_POST["senha"]);
        $tipo=$_POST["tipo"];
        $now=new datetime();
        $date=$now->format('d-m-Y');
        $sql="INSERT INTO usuario(nome, email, senha, tipo, datacad) values('{$nome}','{$email}', '{$senha}','{$tipo}', '{$date}')";
        include_once "classes/conexao.php";
        $conexao->exec($sql);
        echo "<h3>Registro gravado com sucesso</h3>";
        echo "<a href='login.php'> Fazer Login </a>";
    }
    catch(exception $erro){
        echo $erro->getmessage();
        echo "Ocorreu um erro, tente novamente";
    }
?>