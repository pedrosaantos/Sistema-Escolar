<?php

    require_once "../classes/Disciplina.php";

    $id = $_POST['id'];
    $disciplina = new Disciplina($id);

    $disciplina->nomeDisciplina = $_POST['nomeDisciplina'];
    $disciplina->cargaHora = $_POST['cargaHora'];

    $disciplina->atualizar();

    header('location: disciplinas-listar.php');

?>