<?php
  
  class Peixe extends VidaAgua{
    
    public $classificacao;
    public $tamanho;

    public function __construct($nome, $nome_cientifico, $cor, $preco, $classificacao, $tamanho) {
      $this->nome = $nome;
      $this->nome_cientifico = $nome_cientifico;
      $this->cor = $cor;
      $this->preco = $preco;
      $this->classificacao = $classificacao;
      $this->tamanho = $tamanho;
    }

    public function imprimir() {
      
      echo "******** PEIXE CADASTRADO COM SUCESSO ******** <br>";
      echo("Nome: ".$this->nome)."<br>";
      echo("Nome Científico: ".$this->nome_cientifico)."<br>";
      echo("Cor: ". $this->cor)."<br>";
      echo("Preço: " .$this->preco)."<br>";
      echo("Classificação: ". $this->classificacao)."<br>";
      echo("Tamanho: ".$this->tamanho);
    }
  }
?>
