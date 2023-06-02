<?php

    class Aluno{

        public $id;
        public $nomeAluno;
        public $datdNasc;
        public $cpf;
        public $email;
        public $tel;
        public $cep;
        public $rua;
        public $numero;
        public $bairro;
        public $cidade;
        public $uf;
        public $genero;
        public $turma_id;
        public $matricula;

        public function __construct($id = false){   
            if($id){
                $this -> id = $id;
                $this->carregar();
            }

        }

        public function inserir(){
            
            $sql = "INSERT INTO tb_alunos (nomeAluno, dataNasc, cpf, email, tel, cep, rua, numero, bairro, cidade, uf, genero, turma_id, matricula) VALUES(
                '".$this->nomeAluno. "',
                '".$this->dataNasc. "',
                '".$this->email. "',
                '".$this->cpf. "',
                '".$this->tel. "',
                '".$this->cep. "',
                '".$this->rua. "',
                '".$this->numero. "',
                '".$this->bairro. "',
                '".$this->cidade. "',
                '".$this->uf. "',
                '".$this->genero. "',
                '".$this->turma_id. "',
                '".$this->matricula. "'
                )";
            
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $conexao->exec($sql);

            // echo "<h1>Registro Gravado com Sucesso!!!</h1>";
            header('Location: alunos-listar.php');

        }


        public function listar(){
            $sql = "SELECT * FROM tb_alunos a JOIN tb_turmas t
            ON a.turma_id = t.id ORDER BY a.id";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $resultado = $conexao->query($sql);

            $lista = $resultado->fetchAll();

            return $lista;
        }

        public function excluir(){
            $sql = "DELETE FROM tb_alunos a JOIN tb_turmas t 
            ON a.turma_id = t.id 
            WHERE a.id=".$this->id;

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $conexao->exec($sql);
        }

        public function carregar(){
            
            $sql = "SELECT * FROM tb_alunos a JOIN tb_turmas t 
            ON a.turma_id = t.id 
            WHERE a.id=" .$this->id;

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

            $resultado = $conexao->query($sql);

            $linha = $resultado->fetch();

            $this->nomeAluno = $linha['nomeAluno'];
            $this->dataNasc = $linha['dataNasc'];
            $this->cpf = $linha['cpf'];
            $this->email = $linha['email'];
            $this->tel = $linha['tel'];
            $this->cep = $linha['cep'];
            $this->rua = $linha['rua'];
            $this->numero = $linha['numero'];
            $this->bairro = $linha['bairro'];
            $this->cidade = $linha['cidade'];
            $this->uf = $linha['uf'];
            $this->genero = $linha['genero'];
            $this->turma_id = $linha['turma_id'];
            $this->matricula = $linha['matricula'];

        }

        public function atualizar(){
            
            $sql = "UPDATE tb_alunos SET
                        nomeAluno = '$this->nomeAluno' ,
                        dataNasc = '$this->dataNasc' ,
                        cpf = '$this->cpf' ,
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