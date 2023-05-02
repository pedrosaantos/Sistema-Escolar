<?php

    // Inclui o arquivo que contém a definiçao da classe Turma 
    require_once "../classes/Turma.php";

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class="bg-dark text-light">

    <header class="mb-4">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Sistema Acadêmico</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../menu.html">Voltar ao Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../alunos/alunos-listar.php">Alunos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../turmas/turmas-listar.php">Turmas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../disciplinas/disciplinas-listar.php">Disciplinas</a>
                  </li>            
                </ul>
                
                <a class="btn btn-danger" href="#">Logout</a>

              </div>
            </div>
          </nav>
    </header>
    <main class="container">
        
        <h1 class="my-5 fs-2 fw-bold">Atualizar Dados de Turmas</h1>

        <form action="turmas-editar-gravar.php" method="POST">

            <input type="hidden" name="id" value="<?= $turma->id ?>" value="Gravar">

            <div class="row my-5">
                <div class="form-group col-8">
                    <div class="form-floating">
                        <input class="form-control" type="text" name="descTurma" id="descTurma" value="<?= $turma->descTurma ?>" required>
                        <label for="descTurma">Turma:</label>
                    </div>
                </div>
                <div class="form-group col-4">
                    <div class="form-floating">
                        <input  class="form-control" type="number" name="ano" id="ano" value="<?= $turma->ano ?>" required>
                        <label for="ano">Ano:</label>
                    </div>
                </div>
            </div>

            <input class="btn btn-lg btn-primary" type="submit" value="Gravar">
            
        </form>
    </main>

    <footer class="fixed-bottom align-items-center py-3 my-2 border-top text-light">
        <p class="text-center ">Desenvolvido por <strong>Pedro dos Santos</strong></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>