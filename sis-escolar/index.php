<?php session_start() ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

    <?php
        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao'])){
                $login = '123';
                $senha = '123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //Logado
                    $_SESSION['login'] = true;
                    header('Location: menu.html');
                }else{
                    //erro
                    echo 'Erro!';
                }
            }

            include('login.php');
        }else{
            header('Location: menu.html');
        }
    ?>

      <footer class="fixed-bottom align-items-center py-3 my-2 border-top text-light">
        <p class="text-center ">Desenvolvido por <strong>Pedro dos Santos</strong></p>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
