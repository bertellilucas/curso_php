<?php

$noticias = array();

$noticias[1]['titulo'] = 'titulo da noticia 1';
$noticias[1]['conteudo'] = 'conteudo dessa notícia 1';

$noticias[2]['titulo'] = 'titulo da noticia 2';
$noticias[2]['conteudo'] = 'conteudo dessa notícia 2';

$noticias[3]['titulo'] = 'titulo da noticia 3';
$noticias[3]['conteudo'] = 'conteudo dessa notícia 3';

$noticias[4]['titulo'] = 'titulo da noticia 4';
$noticias[4]['conteudo'] = 'conteudo dessa notícia 4';

//var_dump($noticias);


for ($idx=1; $idx <= 4 ; $idx = $idx + 1) {
  echo $noticias[$idx]['titulo'];
  echo '<br />';
  echo $noticias[$idx]['conteudo'];
  echo '<br />';
}




 ?>
