<?php

class Turma{

    public $id;
    public $descTurma;
    public $ano;
    
    // Define um método contrutor na classe com parametro opcional
    public function __construct($id = false){
        // Verifica se a variavel $id foi definida
        if($id){
            // Atribui o valor de $id à propriedade $id do objeto
            $this->id = $id;
            // Carrega os dados referentes ao ID da URL
            $this->carregar();

        }
    }

        // Define a string SQL de inserção de daos na tabela "tb_turmas"
    public function inserir(){
        $sql = "INSERT INTO tb_turmas (descTurma, ano) VALUES (
        '".$this->descTurma. "',
        '".$this->ano. "'
    )";

    // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    // Executa a string SQL na conexão, inserindo os dados na tabela "tb_turmas"
    $conexao->exec($sql);

    echo "Registro Gravado com Sucesso!!!";

    }

    public function listar(){
        // Define a string SQL para selecionar todos ps registros da tabela
        $sql = "SELECT * FROM tb_turmas";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string sql na conexão retornando um objeto de resultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchAll();

        // Retorna o array contendo todos os registrs da tabela "tb_turmas
        return $lista;
    }


    public function excluir(){

        //Define a string de consulta sql para deletar um registro da tabela "tb_turmas" com base no seu ID
        $sql = "DELETE FROM tb_turmas WHERE id=".$this->id;

        //Cria uma nova conexãPDO com o banco de dados localizado no servidor "127.0.0.1" e autentica 
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $conexao->exec($sql);
    }

    public function carregar(){

        // Query SQL para buscar uma turma no banco de dados
        $sql = "SELECT * FROM tb_turmas WHERE id=" . $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Execução da query e armazenamento do resultado em uma variavel
        $resultado = $conexao->query($sql);

        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos recuperados do banco
        $this->descTurma = $linha['descTurma'];
        $this->ano = $linha['ano'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo ID
        $sql = "UPDATE tb_turmas SET
                    descTurma = '$this->descTurma' ,
                    ano = '$this->ano'
                WHERE id = $this->id ";
        
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        
        $conexao->exec($sql);
    }
}
?>