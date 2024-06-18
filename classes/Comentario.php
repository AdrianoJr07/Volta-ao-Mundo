<?php
class Comentario {
    public $id;
    public $comentarios;
    public $id_user;
    public $status;

    public function __construct($id = false) {
        if ($id) {
            $this->id = $id;
            $this->carregar();
        }
    }

    public function listar() {
        $sql = "SELECT c.id, c.comentarios, u.email as email, c.status FROM comentario c JOIN usuario u ON c.id_user = u.id WHERE c.status = 1";
        include "classes/conexao.php";
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar() {
        $sql = "SELECT c.id, c.comentarios, u.email as email FROM comentario c JOIN usuario u ON c.id_user = u.id WHERE c.id = :id";
        include "classes/conexao.php";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        $linha = $stmt->fetch();
        

        $this->id = $linha['id'];
        $this->id_user = $linha['id_user'];
        $this->comentario = $linha['comentarios'];
        $this->status = $linha['status'];
    }

    public function inserir() {
        $sql="INSERT INTO comentario (comentarios, id_user, status) VALUES (:comentario, :id_user, :status)";
        include "classes/conexao.php";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':comentario', $this->comentarios);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':status', $this->status);
        $stmt->execute();
        echo "Registro gravado com sucesso!";
    
    }
    public function listarespera(){
        $sql="SELECT c.id, c.comentarios, u.email as email, c.status FROM comentario c JOIN usuario u ON c.id_user = u.id WHERE c.status=2";
        include "classes/conexao.php";
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function atualizar(){
        $sql = "UPDATE comentario SET status = :status WHERE id = :id";
        include "classes/conexao.php";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
    public function excluir(){
        $sql="DELETE FROM comentario WHERE id = :id";
        include "classes/conexao.php";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
}
?>
