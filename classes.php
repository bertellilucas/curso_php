<?php

class Pessoa{
  //Atributo

  var $nome;

  //getter e setter
  function setNome($nome_definido){
    $this->nome = $nome_definido;
  }

  function getNome(){
    return $this->nome;
  }



}

$pessoa = new Pessoa();
$pessoa->setNome('Lucas');
echo $pessoa->getNome();
 ?>
