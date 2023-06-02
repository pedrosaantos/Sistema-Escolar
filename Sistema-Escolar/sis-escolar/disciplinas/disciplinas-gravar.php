<?php

    require_once "../classes/Disciplina.php";

    $disciplina = new Disciplina();

    $disciplina->nomeDisciplina = $_POST['nomeDisciplina'];
    $disciplina->cargaHora = $_POST['cargaHora'];

    $disciplina->inserir();

?>