<?php
    
    // Inclui o arquivo que contém a definição da classe turma
    require_once "classes/Turma.php";

    // Cria um novo objeto turma utilizando o id do objeto como referencia
    $id = $_POST['id'];
    $turma = new Turma($id);

    // Define as propriedades descTurma e ano do objeto Turma
    $turma->descTurma = $_POST['descTurma'];
    $turma->ano = $_POST['ano'];

    // chama o mátodo atualizar() no objeto Turma
    $turma->atualizar();

    // Redireciona a página para a listagem de turmas
    header('location: turmas-listar.php');

?>