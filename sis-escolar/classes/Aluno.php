<?php

    class Aluno{

        public $id;
        public $nomeAluno;
        public $datdNasc;
        public $email;
        public $tel;
        public $cep;
        public $rua;
        public $numero;
        public $bairro;
        public $cidade;
        public $uf;
        public $genero;
        public $turma;
        public $matricula;

        public function __construct($id = false){   
            if($id){
                $this -> id = $id;
                $this->carregar();
            }

        }

        public function inserir(){
            
            $sql = "INSERT INTO tb_alunos (nomeAluno, dataNasc, email, tel, cep, rua, numero, bairro, cidade, uf, genero, turma, matricula) VALUES(
                '".$this->nomeAluno. "',
                '".$this->dataNasc. "',
                '".$this->email. "',
                '".$this->tel. "',
                '".$this->cep. "',
                '".$this->rua. "',
                '".$this->numero. "',
                '".$this->bairro. "',
                '".$this->cidade. "',
                '".$this->uf. "',
                '".$this->genero. "',
                '".$this->turma. "',
                '".$this->matricula. "'
                )";
            
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $conexao->exec($sql);

            // echo "<h1>Registro Gravado com Sucesso!!!</h1>";
            header('Location: alunos-listar.php');

        }


        public function listar(){
            $sql = "SELECT * FROM tb_alunos";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function excluir(){
            $sql = "DELETE FROM tb_alunos WHERE id=". $this->id;

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $conexao->exec($sql);
        }

        public function carregar(){
            
            $sql = "SELECT * FROM tb_alunos WHERE id=" .$this->id;

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $resultado = $conexao->query($sql);

            $linha = $resultado->fetch();

            $this->nomeAluno = $linha['nomeAluno'];
            $this->dataNasc = $linha['dataNasc'];
            $this->email = $linha['email'];
            $this->tel = $linha['tel'];
            $this->cep = $linha['cep'];
            $this->rua = $linha['rua'];
            $this->numero = $linha['numero'];
            $this->bairro = $linha['bairro'];
            $this->cidade = $linha['cidade'];
            $this->uf = $linha['uf'];
            $this->genero = $linha['genero'];
            $this->turma = $linha['turma'];
            $this->matricula = $linha['matricula'];

        }

        public function atualizar(){
            
            $sql = "UPDATE tb_alunos SET
                        nomeAluno = '$this->nomeAluno' ,
                        dataNasc = '$this->dataNasc' ,
                        email = '$this->email' , 
                        tel = '$this->tel' , 
                        cep = '$this->cep' , 
                        rua = '$this->rua' , 
                        numero = '$this->numero' , 
                        bairro = '$this->bairro' , 
                        cidade = '$this->cidade' , 
                        uf = '$this->uf' ,
                        genero = '$this->genero' , 
                        turma = '$this->turma' , 
                        matricula = '$this->matricula'
                    WHERE id = $this->id";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        
            $conexao->exec($sql);

        }

    }

?>