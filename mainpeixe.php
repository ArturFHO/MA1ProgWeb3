<?php
  
  include("classes/peixe.php");
   
    $peixe = new Peixe(); 
    $peixe->nome = $_POST['nome'];
    $peixe->nome_cientifico = $_POST['nomecientifico'];
    $peixe->cor = $_POST['corpredominante'];  
    $peixe->preco = $_POST['preco'];
    $peixe->classificacao = $_POST['telefone'];
    $peixe->tamanho = $_POST['peso'];
    
    echo "******** PEIXE CADASTRADO COM SUCESSO ******** <br>";
    echo("Nome: ".$peixe->nome)."<br>";
    echo("Nome Científico: ".$peixe->nome_cientifico)."<br>";
    echo("Cor: ".$peixe->cor)."<br>";
    echo("Preço: " .$peixe->preco)."<br>";
    echo("Classificação: ".$peixe->classificacao)."<br>";
    echo("Tamanho: ".$peixe->tamanho);
?>
