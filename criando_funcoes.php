<?php

//função sem retorno
function exibir_boas_vindas($nome = 'indefinido'){
  echo "Bem vindo ao curso de php, ".$nome;
}

//função com retorno
function calcular_soma($numero1,$numero2){
  return $numero1+$numero2;
}

//chamar a função
echo calcular_soma(2,2);
 ?>
