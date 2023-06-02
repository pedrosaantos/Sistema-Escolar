<?php
// Inclui o arquivo que conté a definição da classe Turma
require_once "../classes/Turma.php";

//Obtém o valor do parametro "ID" da URL e armazena em variavel
$id = $_GET['id'];

//Cria nov0o objeto Turma
$turma = new Turma($id);

//Chama o método "excluir" do objeto turma
$turma->excluir();

//redireciona novamente para pagina "turmas-listar.php"
header('Location: turmas-listar.php');

?>