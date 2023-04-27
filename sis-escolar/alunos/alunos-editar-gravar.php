<?php

    require_once "../classes/Aluno.php";

    $id = $_POST['id'];

    $aluno = new Aluno();

    $aluno->nomeAluno = $_POST['nomeAluno'];
    $aluno->dataNasc = $_POST['dataNasc'];
    $aluno->email = $_POST['email'];
    $aluno->tel = $_POST['tel'];
    $aluno->cep = $_POST['cep'];
    $aluno->rua = $_POST['rua'];
    $aluno->numero = $_POST['numero'];
    $aluno->bairro = $_POST['bairro'];
    $aluno->cidade = $_POST['cidade'];
    $aluno->uf = $_POST['uf'];
    $aluno->genero = $_POST['genero'];
    $aluno->turma = $_POST['turma'];
    $aluno->matricula = $_POST['matricula'];

    $aluno->atualizar();

    header('location: alunos-listar.php');


?>