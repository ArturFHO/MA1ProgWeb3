<?php
  
  include("classes/VidaAgua.php");
  include("classes/Peixe.php");
   
  $nome = $_POST['nome'];
  $nome_cientifico = $_POST['nomecientifico'];
  $cor = $_POST['corpredominante'];
  $preco = $_POST['preco'];
  $classificacao = $_POST['classificacao'];
  $peso = $_POST['peso'];
    
  $peixe = new Peixe($nome, $nome_cientifico, $cor, $preco, $classificacao, $peso); 
      
  $peixe->imprimir();
?>
