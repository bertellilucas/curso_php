<?php

//date = Y - m -d
$date = date("d-m-Y H:i");

//strtotime

$data_inicial = '2015-04-02';
$data_final = '2015-04-03';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_time = $time_final - $time_inicial;

$diaSegundos = 24*60*60;
$diferenca_dias = $diferenca_time / $diaSegundos;

echo $diferenca_dias;


 ?>
