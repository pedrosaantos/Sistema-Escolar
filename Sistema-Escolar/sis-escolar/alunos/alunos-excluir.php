<?php

    require_once "../classes/Aluno.php";

    $id = $_GET['id'];

    $aluno = new Aluno($id);

    $aluno->excluir();

    //echo $id;
    header('location: alunos-listar.php');

?>