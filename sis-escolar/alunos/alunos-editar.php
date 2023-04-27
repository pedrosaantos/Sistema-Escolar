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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
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
<body class="container">

    <h1>Sistema Acadêmico</h1>

    <h3>Cadastro de Alunos</h3>

    <fieldset>

        <form action="alunos-editar-gravar.php" method="POST">

        <input type="hidden" name="id" value="<?= $aluno->id ?>" value="Gravar">

            <label for="nomeAluno">Nome:</label>
            <input  class="form-control" type="text" name="nomeAluno" value="<?= $aluno->nomeAluno ?>">

            <label for="dataNasc">Data de Nascimento:</label>
            <input  class="form-control" type="date" name="dataNasc" value="<?= $aluno->dataNasc ?>">

            <label for="email">E-mail:</label>
            <input  class="form-control" type="email" name="email" value="<?= $aluno->email ?>">

            <label for="tel">Telefone:</label>
            <input  class="form-control" type="text" name="tel" value="<?= $aluno->tel ?>">

            <label for="cep">CEP:</label>
            <input  class="form-control" type="text" name="cep" id="cep" value="<?= $aluno->cep ?>"
                    onchange="pesquisacep(this.value); ">

            <label for="rua">Endereço:</label>
            <input  class="form-control" type="text" name="rua" id="rua" value="<?= $aluno->rua ?>">

            <label for="numero">Nº:</label>
            <input  class="form-control" type="number" name="numero" id="" value="<?= $aluno->numero ?>">

            <label for="bairro">Bairro:</label>
            <input  class="form-control" type="text" name="bairro" id="bairro" value="<?= $aluno->bairro ?>">

            <label for="cidade">Cidade:</label>
            <input  class="form-control" type="text" name="cidade" id="cidade" value="<?= $aluno->cidade ?>">

            <label for="uf">Estado</label>
            <input  class="form-control" type="text" name="uf" id="uf" value="<?= $aluno->uf ?>">

            <label for="genero">Gênero:</label>

                <input type="radio" name="genero" id="masc" value="1">
                <label for="masc">Masculino</label>

                <input type="radio" name="genero" id="femi" value="0">
                <label for="femi">Feminino</label>

            <label for="turma">Turma:</label>
            <select name="turma" id="">
                <option value="0">Selecione uma opção...</option>
                <option value="1">DSM 1</option>
                <option value="2">DSM 2</option>
            </select>

            <label for="matricula">Matrícula Ativa:</label>
            <input type="checkbox" name="matricula" value="1" value="<?= $aluno->matricula ?>" checked>

            <br><input class="btn btn-success font-weight-bold" type="submit" value="Gravar">
        </form>

    </fieldset>

    <a style="display: none;" href="https://viacep.com.br/ws/13974664/json/?callback=meu_callback">Chamando JSON</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>