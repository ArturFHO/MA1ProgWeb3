<?php
  
  include("classes/vidaagua.php");
  include("classes/peixe.php");
  include("classes/planta.php");
  include("classes/usuario.php");

  if($_POST['enviarusuario']) 
    
    $usuario = new Usuario(); 
    $usuario->nome = $_POST['nome'];
    $usuario->cpf = $_POST['cpf'];
    $usuario->email = $_POST['email'];
    $usuario->datanasc = $_POST['datanascimento'];
    $usuario->telefone = $_POST['telefone'];
    $usuario->endereco = $_POST['endereco'];
    
    echo($usuario->nome);
  if($_GET['enviarplanta'])
  if($_GET['enviarpeixe'])


?>
