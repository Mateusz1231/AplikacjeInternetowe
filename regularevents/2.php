<?php
$wzorzec = '/\d/';
$tekst = 'mam 4 zeszyty';
if (preg_match($wzorzec, $tekst)){
    echo "znaleziono cyfre<br>";
} else {
    echo "nie znalezniono cyfry<br>";
}


?>