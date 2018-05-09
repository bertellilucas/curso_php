<?php

//Classe mãe ou superclasse
class Felino{
    var $mamifero = 'sim';

    function correr(){
      echo 'Correr como felino';
    }

    }

    //Classe filha ou subclasse

    class Chita extends Felino{
      //Polimorfismo
      function correr(){
        echo 'Correr como chita 100KM/H';
      }
    }

    $chita = new Chita();

    echo $chita->mamifero . '<br>';
    $chita->correr();


?>
