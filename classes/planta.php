<?php
  
  class Planta extends VidaAgua{
    
    public $tipo;
    public $peso;

    public function __construct($nome, $nome_cientifico, $cor, $preco, $tipo, $peso) {
      $this->nome = $nome;
      $this->nome_cientifico = $nome_cientifico;
      $this->cor = $cor;
      $this->preco = $preco;
      $this->tipo = $tipo;
      $this->peso = $peso;
    }

    public function imprimir() {
      
      echo "******** PLANTA CADASTRADA COM SUCESSO ******** <br>";
      echo("Nome: ".$this->nome)."<br>";
      echo("Nome Científico: ".$this->nome_cientifico)."<br>";
      echo("Cor: ". $this->cor)."<br>";
      echo("Preço: " .$this->preco)."<br>";
      echo("Classificação: ". $this->tipo)."<br>";
      echo("Peso: ".$this->peso);
    }
  }
?>
