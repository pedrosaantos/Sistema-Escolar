<?php

    $url = 'sis-escola-aula-10-disciplinas.json';
    // Define a URL do arquivo json

    $json = file_get_contents($url);
    // Obtém o conteúdo do arquivo JSON como uma string;

    $data = json_decode($json, true);
    // Decodifica a string JSON em um array associativo do PHP e o resultado é armazenado na variavel $data

    foreach ($data as $disciplina) {

        $sql = "INSERT INTO tb_disciplinas (nomeDisc, professor, cargaHora) VALUES ('{$disciplina['nome']}','{$disciplina['professor']}','{$disciplina['carga']}')";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        if($conexao->exec($sql)){
            echo"Nome: {$disciplina['nome']} <br>";

            header('Location: disciplinas/disciplinas_listar.php');
        }else{
            echo"Erro";
        }

        // echo "<h4> - - - - - - - - - - - - </h4>";
        // echo "Nome: {$disciplina['nome']} <br>";
        // echo "Turma: {$disciplina['professor']} <br>";
        // echo "Carga Horaria: {$disciplina['carga']} <br>";

        
    }
?>