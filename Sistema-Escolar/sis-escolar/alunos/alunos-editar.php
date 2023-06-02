<?php

    require_once "../classes/Aluno.php";

    $id = $_GET['id'];

    $aluno = new Aluno($id);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Sistema Acadêmico</title>

    <script>    
        function limpa_formulário_cep() {
                document.getElementById('rua').value=("");
        }
        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value=(conteudo.logradouro);
    
                document.getElementById('bairro').value=(conteudo.bairro);
    
                document.getElementById('cidade').value=(conteudo.localidade);
    
                document.getElementById('uf').value=(conteudo.uf);
            }
            else {
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }        
        function pesquisacep(valor) {
            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');
            //Verifica se campo cep possui valor informado.
            if (cep != "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value="...";
                    //Cria um elemento javascript.
                    var script = document.createElement('script');
                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
                }
                else {
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } 
            else {
                limpa_formulário_cep();
            }
        }
    </script>

</head>
<body class=" bg-dark">

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
                <a class="nav-link active" aria-current="page" href="../menu.html">Volatr ao Menu</a>
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

<div class="container bg-dark text-light">
    <h1 class="my-3 fs-2 fw-bold">Atualizar Dados de Alunos</h1>

    <fieldset>

        <form action="alunos-editar-gravar.php" method="POST">

        <input type="hidden" name="id" value="<?= $aluno->id ?>" value="Gravar">

            <div class="row my-4">
                <div class="form-group col-6">
                    <div class="form-floating">
                        <input class="form-control" type="text" name="nomeAluno" value="<?= $aluno->nomeAluno ?>" required>
                        <label for="nomeAluno">Nome:</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <div class="form-floating">
                        <input  class="form-control" type="date" name="dataNasc" value="<?= $aluno->dataNasc ?>" required>
                        <label for="dataNasc">Data de Nascimento:</label>
                    </div>
                </div>
                <div class="form-group col-3">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="cpf" id=""  value="<?= $aluno->cpf ?>" required>
                        <label for="cpf">CPF:</label>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="form-group col-7">
                    <div class="form-floating">
                        <input  class="form-control" type="email" name="email" value="<?= $aluno->email ?>" required>                 
                        <label for="email">E-mail:</label>
                    </div>
                </div>
                <div class="form-group col-5">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="tel" value="<?= $aluno->tel ?>">
                        <label for="tel">Telefone:</label>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="form-group col-4">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="cep" id="cep" value="<?= $aluno->cep ?>" required
                                onchange="pesquisacep(this.value); ">
                        <label for="cep">CEP:</label>
                    </div>
                </div>
                <div class="form-group col-8">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="rua" id="rua" value="<?= $aluno->rua ?>">
                        <label for="rua">Endereço:</label>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="form-group col-2">
                    <div class="form-floating">
                        <input  class="form-control" type="number" name="numero" value="<?= $aluno->numero ?>" required>
                        <label for="numero">Nº:</label>
                    </div>
                </div>
                <div class="form-group col-4">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="bairro" id="bairro" value="<?= $aluno->bairro ?>">
                        <label for="bairro">Bairro:</label>
                    </div>
                    </div>
                <div class="form-group col-4">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="cidade" id="cidade" value="<?= $aluno->cidade ?>">
                        <label for="cidade">Cidade:</label>
                    </div>
                </div>
                <div class="form-group col-2">
                    <div class="form-floating">
                        <input  class="form-control" type="text" name="uf" id="uf" value="<?= $aluno->uf ?>">
                        <label for="uf">Estado</label>
                    </div>
                </div> 
            </div>

            <div class="row my-4 g-2">
                
                <div class="form-group pt-3 col-6">
                    <label class="badge bg-primary text-wrap" for="genero">Gênero:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="mas" value="1">
                        <label class="form-check-label" for="mas">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="fem" value="2">
                        <label class="form-check-label" for="fem">Feminino</label>
                    </div>
                </div>


                <div class="form-group col-6">
                    <div class="form-floating">
                            <select class="form-select" name="turma" id="turma" required>
                            <option selected value="1">DSM 1</option>
                            <option value="2">DSM 2</option>
                            <option value="3">DSM 3</option>
                            </select>
                        <label for="turma">Selecione uma opção...</label>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input mt-2" type="checkbox" name="matricula" id="matricula" value="<?= $aluno->matricula ?>" checked>
                    <label class="form-check-label fs-5" for="matricula">
                        Matricula Ativa
                    </label>
                    </div>
                </div>
            </div>
        
            <input class="btn btn-primary btn-lg font-weight-bold" type="submit" value="Salvar">

        </form>

    </fieldset>
</div>

<footer class="fixed-bottom align-items-center py-3 my-2 border-top text-light">
    <p class="text-center ">Desenvolvido por <strong>Pedro dos Santos</strong></p>
</footer>

    <a style="display: none;" href="https://viacep.com.br/ws/13974664/json/?callback=meu_callback">Chamando JSON</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>