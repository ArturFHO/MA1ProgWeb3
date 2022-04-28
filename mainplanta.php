<?php
  
  include("classes/planta.php");
   
    $planta = new Planta(); 
    $planta->nome = $_POST['nome'];
    $planta->nome_cientifico = $_POST['nomecientifico'];
    $planta->cor = $_POST['corpredominante'];  
    $planta->preco = $_POST['preco'];
    $planta->tipo = $_POST['telefone'];
    $planta->peso = $_POST['peso'];
    
    echo "******** PLANTA CADASTRADA COM SUCESSO ******** <br>";
    echo("Nome: ".$peixe->nome)."<br>";
    echo("Nome Científico: ".$peixe->nome_cientifico)."<br>";
    echo("Cor: ".$peixe->cor)."<br>";
    echo("Preço: " .$peixe->preco)."<br>";
    echo("Classificação: ".$peixe->classificacao)."<br>";
    echo("Tamanho: ".$peixe->tamanho);
?>
