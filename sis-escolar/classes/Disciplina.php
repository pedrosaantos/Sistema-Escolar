<?php

class Disciplina{

    public $id;
    public $nomeDisciplina;
    public $cargaHora;
    
    public function __construct($id = false){
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql = "INSERT INTO tb_disciplinas (nomeDisciplina, cargaHora) VALUES (
        '".$this->nomeDisciplina. "',
        '".$this->cargaHora. "'
    )";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $conexao->exec($sql);

    echo "Registro Gravado com Sucesso!!!";

    }

    public function listar(){
        $sql = "SELECT * FROM tb_disciplinas";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function excluir(){
        $sql = "DELETE FROM tb_disciplinas WHERE id=".$this->id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $conexao->exec($sql);
    }

    public function carregar(){
        $sql = "SELECT * FROM tb_disciplinas WHERE id=".$this->id;

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $resultado = $conexao->query($sql);

        $linha = $resultado->fetch();

        $this->nomeDisciplina = $linha['nomeDisciplina'];
        $this->cargaHora = $linha ['cargaHora'];
    }

    public function atualizar(){
        $sql = "UPDATE tb_disciplinas SET
                    nomeDisciplina = '$this->nomeDisciplina' ,
                    cargaHora = '$this->cargaHora'
                WHERE id=$this->id ";
        
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $conexao->exec($sql);
    }
}
?>