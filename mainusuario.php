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
    echo("Nome: ".$usuario->nome)."<br>";
    echo("CPF: ".$usuario->cpf)."<br>";
    echo("Email: ".$usuario->email)."<br>";
    echo("Data de Nascimento: " .$usuario->datanasc)."<br>";
    echo("Telefone: ".$usuario->telefone)."<br>";
    echo("Endereço: ".$usuario->endereco);
?>
