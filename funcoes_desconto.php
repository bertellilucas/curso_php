<?php

function calcula_desconto($valor_total, $desconto){

  $valor_total_com_desconto = $valor_total - ($valor_total * ($desconto/100));


  return $valor_total_com_desconto;
}

 ?>
