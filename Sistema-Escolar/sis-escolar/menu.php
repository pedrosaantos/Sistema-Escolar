<?php require_once 'Usuarios/usuario-verifica.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

    <header class="mb-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Sistema Acadêmico</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="menu.html">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="alunos/alunos-listar.php">Alunos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="turmas/turmas-listar.php">Turmas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="disciplinas/disciplinas-listar.php">Disciplinas</a>
                  </li>            
                </ul>
                
                <a class="btn btn-danger" href="usuario-logout.php">Logout</a>

              </div>
            </div>
          </nav>
    </header>

    <div class="container mt-4">

        <h1 class="mb-5 text-light">Bem-vindo ao Sistema Acadêmico...</h1>

        <h3 class="mb-5 text-light fw-bold">O que deseja fazer?</h3>

        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card">
                    <h5 class="card-header">Alunos</h5>
                        <div class="card-body text-center">
                            <a href="alunos/alunos-inserir.php" class="btn btn-lg btn-success m-2">Adicionar Alunos</a>
                            <a href="alunos/alunos-listar.php" class="btn btn-lg btn-warning m-2">Gerenciar Alunos</a>
                        </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h5 class="card-header">Turmas</h5>
                        <div class="card-body text-center">
                            <a href="turmas/turmas-inserir.html" class="btn btn-lg btn-success m-2">Adicionar Turmas</a>
                            <a href="turmas/turmas-listar.php" class="btn btn-lg btn-warning m-2">Gerenciar Turmas</a>
                        </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <h5 class="card-header">Disciplinas</h5>
                        <div class="card-body text-center">
                            <a href="disciplinas/disciplinas-inserir.html" class="btn btn-lg btn-success m-2">Adicionar Disciplinas</a>
                            <a href="disciplinas/disciplinas-listar.php" class="btn btn-lg btn-warning m-2">Gerenciar Disciplinas</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom align-items-center py-3 my-2 border-top text-light">
        <p class="text-center ">Desenvolvido por <strong>Pedro dos Santos</strong></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>