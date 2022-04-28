<?php
  
  include("classes/Usuario.php");
  
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $datanasc = $_POST['datanascimento'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
    
  $usuario = new Usuario($nome, $cpf, $email, $datanasc, $telefone, $endereco);
  
  $usuario->imprimir();
?>
