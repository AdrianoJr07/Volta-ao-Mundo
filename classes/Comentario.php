<?php
class Comentario{
    public $id;
    public $comentarios;
    public $id_user;

    public function __construct($id=false){
        if($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function listar(){
        $sql="SELECT c.id, c.comentarios,u.email as email from comentario c join usuario u on c.id_user = u.id ";
        include "classes/conexao.php";
        $resultado=$conexao->query($sql);
        $lista=$resultado->fetchAll();
        return $lista;
    }

    public function carregar(){
        $sql="SELECT c.id, c.comentarios,u.email as email from comentario c join usuario u on c.id_user = u.id  WHERE id=".$this->id;
        include "classes/conexao.php";
        $resultado=$conexao->query($sql);
        $linha=$resultado->fetch();

        $this->id=$linha['id'];
        $this->id_user=$linha['id_user'];
        $this->comentarios=$linha['comentarios'];
    }

    public function inserir(){
        $sql="INSERT INTO  comentario (comentarios, id_user) VALUES('{$this->comentarios}, '{$this->id_user}')";
        include "Classes/conexao.php";
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";
    }
}

?>