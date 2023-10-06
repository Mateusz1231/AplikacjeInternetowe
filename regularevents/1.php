<?php
$wzorzec = '/być/';
$tekst = 'Być albo nie być';
if (preg_match($wzorzec, $tekst)){
    echo "znaleziono wzorzec<br>";
} else {
    echo "nie znalezniono wzorca<br>";
}
echo "znaleziono: ". preg_match_all($wzorzec,$tekst);

?>