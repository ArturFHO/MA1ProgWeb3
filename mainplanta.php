<?php
  
  include("classes/VidaAgua.php");
  include("classes/Planta.php");
   
  $nome = $_POST['nome'];
  $nome_cientifico = $_POST['nomecientifico'];
  $cor = $_POST['corpredominante'];
  $preco = $_POST['preco'];
  $tipo = $_POST['classificacao'];
  $peso = $_POST['peso'];
    
  $planta = new planta($nome, $nome_cientifico, $cor, $preco, $tipo, $peso); 
      
  $planta->imprimir();
?>
