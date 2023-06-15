<?php

try{
    $usuario = $_POST["usuario"];

    // Gera um hash SHA-256 da senha recebido pelo formulario
    $senha = hash("sha256", $_POST["senha"]);

    // Cria uma nova instância da classe DateTime e obtem a data atual no formato "dia-mês-ano"
    $now = new DateTime();
    $date = $now->format('d-m-Y');

    $sql = "INSERT INTO tb_usuarios (usuario, senha, datacad)
            VALUES ('{$usuario}','{$senha}','{$date}')";
    
    include_once "../classes/conexao.php";

    $conexao->exec($sql);

    echo "<h3>Registro gravado com sucesso!</h3>";
    echo "<a href='index.html'>Fazer Login</a>";
}
catch (Exception $erro){
    // Habilitar código abaixo para depurar o erro
    // echo $erro->getMessage();
    echo "Ocorreu um erro. Por favor, tente novamente mais tarde.";
}