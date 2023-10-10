<?php

$wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';

$tekst = "adres: www.apoefjsp.pl ";

if(preg_match($wzorzec, $tekst, $zmienna)){
    echo "znaleziono adres: ".  $zmienna[0];
} else {
    echo "nie znaleziono adresu";
}


?>