<?php

class Tipo{
    public $id;
    public $tipo;
    

    public function __construct($id=false){
        if($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function listar(){
        $sql="SELECT * FROM moisesinho";
        include "classes/conexao.php";
        $resultado=$conexao->query($sql);
        $lista=$resultado->fetchAll();
        return $lista;
    }

    public function carregar(){
        $sql="SELECT * FROM moisesinho WHERE id=".$this->id;
        include "classes/conexao.php";
        $resultado=$conexao->query($sql);
        $linha=$resultado->fetch();

        $this->id=$linha['id'];
        $this->tipo=$linha['tipo'];
    }

    public function inserir(){
        $sql="INSERT INTO moisesinho (tipo) VALUES('{$this->tipo}')";
        include "Classes/conexao.php";
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";
    }
}
?>