<?php

    require_once "../classes/Disciplina.php";

    $id = $_GET['id'];

    $disciplina = new Disciplina($id);

    $disciplina->excluir();

    header('location: disciplinas-listar.php');

?>