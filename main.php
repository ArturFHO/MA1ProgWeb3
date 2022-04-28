<?php
  
  include("classes/usuario.php");
   
    $usuario = new Usuario(); 
    $usuario->nome = $_POST['nome'];
    $usuario->cpf = $_POST['cpf'];
    $usuario->email = $_POST['email'];  
    $usuario->datanasc = $_POST['datanascimento'];
    $usuario->telefone = $_POST['telefone'];
    $usuario->endereco = $_POST['endereco'];
    
    echo "******** USUARIO CADASTRADO COM SUCESSO ******** <br>";
    echo($usuario->nome)."<br>";
    echo($usuario->cpf)."<br>";
    echo($usuario->email)."<br>";
    echo($usuario->datanasc)."<br>";
    echo($usuario->telefone)."<br>";
    echo($usuario->endereco);
?>
