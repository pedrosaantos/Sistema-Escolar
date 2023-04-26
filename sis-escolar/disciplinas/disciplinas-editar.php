<?php

    require_once "../classes/Disciplina.php";

    $id = $_GET['id'];

    $disciplina = new Disciplina($id);

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

    <h3>Alterar disciplina</h3>

    <form action="disciplinas-editar-gravar.php" method="POST">

        <input type="hidden" name="id" value="<?= $disciplina->id ?>">

            <label for="nomeDisciplina">Disciplina: </label>
            <input  class="form-control" type="text" name="nomeDisciplina" value="<?= $disciplina->nomeDisciplina ?>">

            <br><br>

            <label for="cargaHora">Carga Horária:</label>
            <input  class="form-control" type="text" name="cargaHora"  value="<?= $disciplina->cargaHora ?>">

            <br><br>

            <input class="btn btn-success font-weight-bold" type="submit" value="Gravar">

    </form>
</body>
</html>