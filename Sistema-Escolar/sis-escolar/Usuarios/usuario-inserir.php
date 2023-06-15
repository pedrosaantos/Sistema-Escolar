<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
</head>
<body>
    <h3>Novo Usuário</h3>
    <form action="usuario-gravar.php" method="POST">

        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario">

        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        <br><br>

        <input type="submit" value="Gravar">

    </form>
</body>
</html>