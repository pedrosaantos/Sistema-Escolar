<?php

    require_once "../classes/Aluno.php";

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

    $aluno->inserir();

    // echo $aluno->nomeAluno;
    // echo $aluno->dataNasc;
    // echo $aluno->email;
    // echo $aluno->tel;
    // echo $aluno->cep;
    // echo $aluno->rua;
    // echo $aluno->numero;
    // echo $aluno->bairro;
    // echo $aluno->cidade;
    // echo $aluno->uf;
    // echo $aluno->genero;
    // echo $aluno->turma;
    // echo $aluno->matricula;

?>