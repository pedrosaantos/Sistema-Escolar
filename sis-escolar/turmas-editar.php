<?php

    // Inclui o arquivo que contém a definiçao da classe Turma 
    require_once "classes/Turma.php";

    // Obtém o valor do parametro "id" da URl e armazena em variavél
    $id = $_GET['id'];

    // Cria um novo objeto da classe Turma
    $turma = new Turma($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    
    <h1>Sistema Acadêmico</h1>

    <h3>Alterar Turma</h3>

    <form action="turmas-editar-gravar.php" method="POST">

        <input type="hidden" name="id" value="<?= $turma->id ?>" value="Gravar">
        
        <label for="descTurma">Turma:</label>
        <input type="text" name="descTurma" value="<?= $turma->descTurma ?>">

            <br><br>

        <label for="ano">Ano:</label>
        <input type="number" name="ano" value="<?= $turma->ano ?>">

            <br><br>

        <input type="submit" value="Gravar">
    </form>

</body>
</html>