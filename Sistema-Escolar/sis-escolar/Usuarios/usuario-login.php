<?php

    $usuario = $_POST["usuario"];
    $senhalimpa = $_POST["senha"];
    $senha = hash("sha256", $senhalimpa);


    $sql = "SELECT * FROM tb_usuarios WHERE usuario='{$usuario}' and senha='{$senha}'";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');

    $resultado = $conexao->query($sql);

    $linha = $resultado->fetch();

    $usuario_logado = $linha['usuario'];

    // echo $sql;

    // echo "<pre>";
    // print_r($linha);
    // echo "</pre>";

    // echo "$usuario_logado";

    if($usuario_logado == null){
        //Usuario ou senha inválida
        header('Location: usuario-erro.php');
    } else{
        session_start();

        $_SESSION['usuario_logado'] = $usuario_logado;
        header('Location: ../menu.php');
    }
?>