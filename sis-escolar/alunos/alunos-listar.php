<?php

    require_once "../classes/Aluno.php";

    $aluno = new Aluno();

    $lista = $aluno->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Sistema Acadêmico</title>
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
                    <a class="nav-link active" aria-current="page" href="../menu.html"> Voltar ao Menu</a>
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

    <div class="px-5">
    
        <h1 class="my-4 fs-2 fw-bold">Gerenciar Alunos</h1>

        <div class="table-responsive">
            <table class="table table-dark table-hover table-borderless">
                <thead>
                    <tr class="table-group-divider">
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Nasc.</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Matricula Ativa</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <tbody class="text-light">
                    <?php foreach ($lista as $linha): ?>

                      <?php

                        if($linha['genero']== 1){
                          $linha['genero'] = "Masculino";
                        }else{
                          $linha['genero'] = "Feminino";
                        }

                        if($linha['matricula'] == true){
                          $linha['matricula'] = "Sim";
                        }else{
                          $linha['matricula'] = "Não";
                        }

                      ?>
                    <tr>
                        <td class="text-center fw-bold"><?php echo $linha['id'] ?></td>
                        <td><?php echo $linha['nomeAluno'] ?></td>
                        <td><?php echo $linha['dataNasc'] ?></td>
                        <td><?php echo $linha['email'] ?></td>
                        <td><?php echo $linha['tel'] ?></td>
                        <td><?php echo $linha['cep'] ?></td>
                        <td><?php echo $linha['rua'] ?></td>
                        <td><?php echo $linha['cidade'] ?></td>
                        <td><?php echo $linha['genero'] ?></td>
                        <td class="text-center"><?php echo $linha['turma'] ?></td>
                        <td><?php echo $linha['matricula'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="alunos-editar.php?id=<?= $linha['id'] ?>" role="button">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16"><path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/><path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                            </svg>

                            </a>

                            <a class="btn btn-danger" href="alunos-excluir.php?id=<?= $linha['id'] ?>" role="button">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>

                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="fixed-bottom align-items-center py-3 my-2 border-top text-light">
        <p class="text-center ">Desenvolvido por <strong>Pedro dos Santos</strong></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>