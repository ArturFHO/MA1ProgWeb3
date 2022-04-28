<?php

  Class Usuario{
  
    public $nome;
    public $cpf;
    public $email;
    public $datanasc;
    public $telefone;
    public $endereco;

    public function __construct($nome, $cpf, $email, $datanasc, $telefone, $endereco) {
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->email = $email;
      $this->datanasc = $datanasc;
      $this->telefone = $telefone;
      $this->endereco = $endereco;
    }

    public function imprimir() {
      
      echo "******** USUARIO CADASTRADO COM SUCESSO ******** <br>";
      echo("Nome: ".$this->nome)."<br>";
      echo("CPF: ".$this->cpf)."<br>";
      echo("Email: ". $this->email)."<br>";
      echo("Data de Nascimento: " .$this->datanasc)."<br>";
      echo("Telefone: ". $this->telefone)."<br>";
      echo("Endereço: ".$this->endereco);
    }
  }
?>
